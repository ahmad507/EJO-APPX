<?php

namespace App\Http\Controllers;

use App\Repositories\EjoRepository;


class EjoController extends Controller
{
    protected $ejoRepository;
    public function __construct(EjoRepository $ejoRepository)
    {
        $this->ejoRepository = $ejoRepository;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function index()
    {
        $ejo = $this->ejoRepository->getDataEjo();
        //return view('main.ejo.index', compact('ejo'));
        //dd($ejo);
        return $ejo;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function show($id)
    {
        $ejo = $this->ejoRepository->findDataEjo($id);
        return $ejo;
    }
}
