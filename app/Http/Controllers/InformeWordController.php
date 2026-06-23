<?php

namespace App\Http\Controllers;

use App\Models\Avance;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\SimpleType\Jc;
use PhpOffice\PhpWord\SimpleType\JcTable;

class InformeWordController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::where('activo', 1)
            ->orderBy('nombre')
            ->get();

        return view('principal.informe_word', compact('proyectos'));
    }

    public function exportar(Request $request)
    {
        $request->validate([
            'desde' => 'required|date',
            'hasta' => 'required|date|after_or_equal:desde',
            'id_proyecto' => 'nullable|integer',
        ]);

        $query = Avance::with('proyecto')
            ->whereBetween('fecha', [$request->desde, $request->hasta])
            ->orderBy('id_proyecto')
            ->orderBy('fecha')
            ->orderBy('id_avance');

        if (!empty($request->id_proyecto)) {
            $query->where('id_proyecto', $request->id_proyecto);
        }

        $avances = $query->get();

        if ($avances->isEmpty()) {
            return back()->with('error', 'No hay avances en ese rango.');
        }

        $agrupados = $avances->groupBy(function ($avance) {
            return optional($avance->proyecto)->nombre ?? 'PROYECTO';
        });

        $phpWord = new PhpWord();
        $phpWord->setDefaultFontName('Arial');
        $phpWord->setDefaultFontSize(11);

        $sectionStyle = [
            'paperSize' => 'Letter',
            'orientation' => 'portrait',
            'marginTop' => 1440,
            'marginBottom' => 1440,
            'marginLeft' => 1440,
            'marginRight' => 1440,
        ];

        $linkFontStyle = [
            'name' => 'Arial',
            'size' => 11,
            'color' => '0000FF',
            'underline' => 'single',
        ];

        /*
        |--------------------------------------------------------------------------
        | PORTADA
        |--------------------------------------------------------------------------
        */
        $sectionPortada = $phpWord->addSection($sectionStyle);

        $footerPortada = $sectionPortada->addFooter();
        $footerPortada->addPreserveText(
            '{PAGE}',
            ['name' => 'Arial', 'size' => 10],
            ['alignment' => Jc::END]
        );

        $sectionPortada->addTextBreak(5);

        $sectionPortada->addText(
            'INFORME DE AVANCES',
            [
                'name' => 'Arial',
                'bold' => true,
                'size' => 22,
                'color' => '1F497D',
            ],
            [
                'alignment' => Jc::CENTER,
                'spaceAfter' => 260,
            ]
        );

        $sectionPortada->addText(
            'DIRECCIÓN EJECUTIVA',
            [
                'name' => 'Arial',
                'bold' => true,
                'size' => 16,
                'color' => '1F497D',
            ],
            [
                'alignment' => Jc::CENTER,
                'spaceAfter' => 180,
            ]
        );

        $sectionPortada->addText(
            'AAPOS',
            [
                'name' => 'Arial',
                'bold' => true,
                'size' => 16,
                'color' => '1F497D',
            ],
            [
                'alignment' => Jc::CENTER,
                'spaceAfter' => 400,
            ]
        );

        $sectionPortada->addText(
            'Período del ' . date('d/m/Y', strtotime($request->desde)) . ' al ' . date('d/m/Y', strtotime($request->hasta)),
            [
                'name' => 'Arial',
                'size' => 13,
            ],
            [
                'alignment' => Jc::CENTER,
                'spaceAfter' => 180,
            ]
        );

        if (!empty($request->id_proyecto)) {
            $proyectoSeleccionado = Proyecto::find($request->id_proyecto);

            $sectionPortada->addText(
                'Proyecto: ' . ($proyectoSeleccionado->nombre ?? 'No encontrado'),
                [
                    'name' => 'Arial',
                    'size' => 12,
                ],
                [
                    'alignment' => Jc::CENTER,
                    'spaceAfter' => 120,
                ]
            );
        } else {
            $sectionPortada->addText(
                'Proyectos 2026',
                [
                    'name' => 'Arial',
                    'size' => 12,
                ],
                [
                    'alignment' => Jc::CENTER,
                    'spaceAfter' => 120,
                ]
            );
        }

        $sectionPortada->addText(
            'Fecha de generación: ' . now()->format('d/m/Y H:i'),
            [
                'name' => 'Arial',
                'size' => 11,
                'italic' => true,
            ],
            [
                'alignment' => Jc::CENTER,
            ]
        );

        /*
        |--------------------------------------------------------------------------
        | CONTENIDO DE CORRIDO
        |--------------------------------------------------------------------------
        */
        $section = $phpWord->addSection($sectionStyle);

        $footer = $section->addFooter();
        $footer->addPreserveText(
            '{PAGE}',
            ['name' => 'Arial', 'size' => 10],
            ['alignment' => Jc::END]
        );

        $section->addText(
            'AGENDA / INFORME',
            [
                'name' => 'Arial',
                'size' => 18,
                'bold' => true,
                'color' => '1F497D',
            ],
            [
                'alignment' => Jc::CENTER,
                'spaceAfter' => 180,
            ]
        );

        $section->addText(
            'Del ' . date('d/m/Y', strtotime($request->desde)) . ' al ' . date('d/m/Y', strtotime($request->hasta)),
            [
                'name' => 'Arial',
                'size' => 12,
            ],
            [
                'alignment' => Jc::CENTER,
                'spaceAfter' => 260,
            ]
        );

        $phpWord->addTableStyle(
            'tablaInforme',
            [
                'borderSize' => 8,
                'borderColor' => '000000',
                'alignment' => JcTable::CENTER,
                'cellMarginTop' => 70,
                'cellMarginBottom' => 70,
                'cellMarginLeft' => 70,
                'cellMarginRight' => 70,
            ]
        );

        $amarillo = ['bgColor' => 'F2C200'];
        $gris = ['bgColor' => 'D9E2F3'];

        foreach ($agrupados as $nombreProyecto => $listaAvances) {
            $table = $section->addTable('tablaInforme');

            $table->addRow();
            $table->addCell(10000, $amarillo)->addText(
                'PROYECTO',
                ['name' => 'Arial', 'bold' => true],
                ['alignment' => Jc::CENTER]
            );

            $table->addRow();
            $table->addCell(10000, $gris)->addText(
                mb_strtoupper($nombreProyecto),
                ['name' => 'Arial', 'bold' => true],
                ['alignment' => Jc::CENTER]
            );

            $table->addRow();
            $cell = $table->addCell(10000);

            $contador = 1;

            foreach ($listaAvances as $avance) {
                $parrafos = $this->extraerParrafos($avance->descripcion);

                foreach ($parrafos as $parrafo) {
                    $run = $cell->addTextRun([
                        'alignment' => Jc::BOTH,
                        'spaceAfter' => 110,
                    ]);

                    $run->addText(
                        $contador . '. ',
                        [
                            'name' => 'Arial',
                            'size' => 11,
                            'bold' => false,
                        ]
                    );

                    foreach ($this->tokenizarTextoConLinks($parrafo) as $token) {
                        if ($token['type'] === 'link') {
                            $run->addLink(
                                $token['url'],
                                $token['label'],
                                $linkFontStyle
                            );
                        } else {
                            $run->addText(
                                $token['text'],
                                [
                                    'name' => 'Arial',
                                    'size' => 11,
                                ]
                            );
                        }
                    }

                    $contador++;
                }
            }

            $section->addTextBreak(1);
        }

        $nombreArchivo = 'informe_' . $request->desde . '_' . $request->hasta . '.docx';
        $ruta = storage_path('app/' . $nombreArchivo);

        while (ob_get_level()) {
            ob_end_clean();
        }

        $writer = IOFactory::createWriter($phpWord, 'Word2007');
        $writer->save($ruta);

        return response()->download($ruta)->deleteFileAfterSend(true);
    }

    private function extraerParrafos($html)
    {
        if (!$html) {
            return [];
        }

        $texto = html_entity_decode($html, ENT_QUOTES | ENT_HTML5, 'UTF-8');

        // Convierte links HTML <a href="...">texto</a> en la URL para volverla clicable
        $texto = preg_replace_callback(
            '/<a[^>]+href=["\']([^"\']+)["\'][^>]*>(.*?)<\/a>/is',
            function ($matches) {
                return ' ' . trim($matches[1]) . ' ';
            },
            $texto
        );

        $texto = preg_replace('/<\s*br\s*\/?>/i', "\n", $texto);
        $texto = preg_replace('/<\/p>/i', "\n\n", $texto);
        $texto = preg_replace('/<\/div>/i', "\n\n", $texto);
        $texto = preg_replace('/<\/li>/i', "\n", $texto);

        $texto = strip_tags($texto);
        $texto = str_replace("\r", '', $texto);
        $texto = preg_replace("/[ \t]+/", " ", $texto);
        $texto = preg_replace("/\n{3,}/", "\n\n", $texto);
        $texto = trim($texto);

        if ($texto === '') {
            return [];
        }

        $parrafos = preg_split("/\n{2,}/", $texto);
        $parrafos = array_values(array_filter(array_map('trim', $parrafos)));

        return $parrafos;
    }

    private function tokenizarTextoConLinks($texto)
    {
        $texto = trim($texto);

        if ($texto === '') {
            return [];
        }

        $regex = '/(https?:\/\/[^\s<>"\)\]]+)/i';
        $partes = preg_split($regex, $texto, -1, PREG_SPLIT_DELIM_CAPTURE);

        $tokens = [];

        foreach ($partes as $parte) {
            if ($parte === '' || $parte === null) {
                continue;
            }

            if (preg_match('/^https?:\/\/[^\s<>"\)\]]+$/i', $parte)) {
                $tokens[] = [
                    'type' => 'link',
                    'url' => $parte,
                    'label' => $parte,
                ];
            } else {
                $tokens[] = [
                    'type' => 'text',
                    'text' => $parte,
                ];
            }
        }

        return $tokens;
    }
}
