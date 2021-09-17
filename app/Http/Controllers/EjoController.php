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
    public function index()
    {
        $ejo = $this->ejoRepository->getDataEjo();
        return $ejo;
    }
}
