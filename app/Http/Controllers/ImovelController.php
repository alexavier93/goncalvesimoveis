<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Diferencial;
use App\Models\Imovel;
use App\Models\ImovelImage;
use App\Models\ImovelPlanta;
use App\Models\ImovelStatus;
use App\Models\Status;
use App\Models\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImovelController extends Controller
{

    private $imovel;

    public function __construct(Imovel $imovel)
    {
        $this->imovel = $imovel;
    }

    public function index()
    {

        $imoveis = DB::table('imoveis')
            ->leftJoin('categorias', 'categorias.id', '=', 'imoveis.categoria_id')
            ->where('imoveis.status', '=', '1')
            ->where('imoveis.view_home', '=', '1')
            ->select('imoveis.*', 'categorias.nome as categoriaNome')
            ->orderBy('id', 'desc')
            ->paginate(10);
          

        $categorias = Categoria::all();
        $tipos = Tipo::all();

        return view('imoveis.index', compact('imoveis', 'categorias', 'tipos'));
    }

    public function categoria($categoria)
    {

        $categoria = Categoria::where('slug', $categoria)->firstOrFail();

        $imoveis = DB::table('imoveis')
            ->select('imoveis.*', 'categorias.nome as categoriaNome', 'categorias.slug as categoriaSlug', 'imoveis_imagens.cover', 'imoveis_imagens.image')
            ->leftJoin('categorias', 'categorias.id', '=', 'imoveis.categoria_id')
            ->leftJoin('imoveis_imagens', 'imoveis_imagens.imovel_id', '=', 'imoveis.id')
            ->where('imoveis.categoria_id', '=', $categoria->id)
            ->where('imoveis.status', '=', '1')
            ->where('imoveis_imagens.cover', '=', '1')
            ->orderBy('id', 'desc')
            ->paginate(12);

        $categorias = Categoria::all();

        return view('imoveis.categoria', compact('imoveis', 'categorias', 'categoria'));
    }

    public function info($slug)
    {

        $imovel = $this->imovel->where('slug', $slug)->firstOrFail();

        $categorias = Categoria::all();
        $diferenciais = Diferencial::all();
        $status = Status::all();
        $statusProgresso = ImovelStatus::where('imovel_id', $imovel->id)->get();

        $images = $imovel->imagens()->get();
        $plantas = $imovel->plantas()->get();

        return view('imoveis.info', compact('imovel', 'categorias', 'diferenciais', 'status', 'images', 'plantas', 'statusProgresso'));
    }


    public function busca(Request $request)
    {

        if($request->cidade){

            $imoveis = DB::table('imoveis')
            ->select('imoveis.*', 'categorias.nome as categoriaNome', 'categorias.slug as categoriaSlug', 'imoveis_imagens.cover', 'imoveis_imagens.image')
            ->leftJoin('categorias', 'categorias.id', '=', 'imoveis.categoria_id')
            ->leftJoin('imoveis_imagens', 'imoveis_imagens.imovel_id', '=', 'imoveis.id')
            ->where('imoveis.cidade','LIKE','%'.$request->cidade.'%')
            ->where('imoveis.categoria_id', '=', $request->categoria)
            ->where('imoveis.tipo_id', '=', $request->tipo)
            ->where('imoveis.status', '=', '1')
            ->where('imoveis_imagens.cover', '=', '1')
            ->orderBy('id', 'desc')
            ->get();
            
        }else{

            $imoveis = DB::table('imoveis')
            ->select('imoveis.*', 'categorias.nome as categoriaNome', 'categorias.slug as categoriaSlug', 'imoveis_imagens.cover', 'imoveis_imagens.image')
            ->leftJoin('categorias', 'categorias.id', '=', 'imoveis.categoria_id')
            ->leftJoin('imoveis_imagens', 'imoveis_imagens.imovel_id', '=', 'imoveis.id')
            ->where('imoveis.categoria_id', '=', $request->categoria)
            ->where('imoveis.tipo_id', '=', $request->tipo)
            ->where('imoveis.status', '=', '1')
            ->where('imoveis_imagens.cover', '=', '1')
            ->orderBy('id', 'desc')
            ->get();

        }

        $categorias = Categoria::all();
        $tipos = Tipo::all();

        return view('imoveis.busca', compact('imoveis', 'categorias', 'tipos'));

    }

}
