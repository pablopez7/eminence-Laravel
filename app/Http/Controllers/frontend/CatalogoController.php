<?php

namespace App\Http\Controllers\frontend;

use App\Catalogue;
use App\Category;
use App\Http\Controllers\Controller;
use App\Spa;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogues = Catalogue::where('status', 'active')->get();

        $spas = Spa::all();

        Mapper::map(23.9777878, -102.9185856, //Creación de mapa mediante Mapper
            [
                'zoom' => 5,

                'center' => true,

                'marker' => false,

                'cluster' => false, //Configuracion del mapa

                'type' => 'ROADMAP',

                'overlay' => 'TRAFFIC',

                'fullscreenControl' => true,

                'eventAfterLoad' => 'postConfigure(this,marker_0);',

            ]

        );

        foreach ($spas as $spa) {

            //Creación de InformationWindows para cada punto en el mapa
            Mapper::informationWindow(

                $spa->latitude,

                $spa->length,

                //Render para cada InformationWindow
                "
                    <div class='panel panel-success'>
                        <div class='panel-heading'>
                            <span class='text-success text-center'><strong>" . $spa->name . "</strong></span>
                        </div>
                        <div class='panel-body' align='left'>
                            <span class='clearfix'>" . $spa->address . "</span>
                            <br><span class='clearfix'><b class='text-success'>contacto:</b> " . $spa->contact . "</span>
                            <span><b class='text-success'>telefono:</b> " . $spa->phone . "</span>
                            <span class='clearfix'><b class='text-success'>email:</b> " . $spa->email . "</span>
                            <br><b><a class='text-primary' href='http://$spa->web_page' target='_blank'><span class='clearfix'>" . $spa->web_page . "</span></a></b>
                        </div>
                    </div>
                ",

                [
                    'open' => false,

                    'maxWidth' => 220,

                    'markers' => [

                        'title' => $spa->name, //Configuracion del marcador

                        'draggable' => false,

                        'zoom' => 20,

                    ],

                ]

            );

        }

        return view('frontend.home', ['catalogues' => $catalogues]);

    }

    public function menu()
    {
        $catalogues = Catalogue::where('status', 'active')->get();

        return view('layouts.eminence', ['catalogues' => $catalogues]);
    }

    public function catalogos(Category $category)
    {
        $catalogues = Catalogue::where('status', 'active')
            ->orderBy('id', 'asc')
            ->paginate(8);

        $categories = Category::where('status', 'active')->get();

        return view('frontend.catalogos', [
            'catalogues' => $catalogues,
            'categories' => $categories,
        ]);
    }
}
