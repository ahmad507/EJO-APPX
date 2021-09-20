<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEjoRequest;
use App\Repositories\EjoRepository;


class EjoController extends Controller
{
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    protected $ejoRepository;
    public function __construct(EjoRepository $ejoRepository)
    {
        $this->ejoRepository = $ejoRepository;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function index()
    {
        $ejo = $this->ejoRepository->getDataEjo();
        return view('main.ejo.index', compact('ejo'));
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function show($id)
    {
        $ejo = $this->ejoRepository->findDataEjo($id);
        return $ejo;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function create()
    {
        return view('main.ejo.create');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function store(StoreEjoRequest $ejo)
    {
        $this->ejoRepository->storeDataEjo($ejo);
        return redirect()->route('ejo.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function edit($id)
    {
        $ejo = $this->ejoRepository->findDataEjoById($id);
        return view('main.ejo.edit', compact('ejo'));
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function update(StoreEjoRequest $id, $ejo)
    {
        $this->ejoRepository->updateDataEjo($id, $ejo);
        return redirect()->route('ejo.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function destroy($id)
    {
        $this->ejoRepository->deleteDataEjo($id);
        return redirect()->route('ejo.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
}
