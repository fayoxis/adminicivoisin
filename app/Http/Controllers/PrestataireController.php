<?php

namespace App\Http\Controllers;

use App\DataTables\PrestataireDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePrestataireRequest;
use App\Http\Requests\UpdatePrestataireRequest;
use App\Repositories\PrestataireRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PrestataireController extends AppBaseController
{
    /** @var PrestataireRepository $prestataireRepository*/
    private $prestataireRepository;

    public function __construct(PrestataireRepository $prestataireRepo)
    {
        $this->prestataireRepository = $prestataireRepo;
    }

    /**
     * Display a listing of the Prestataire.
     *
     * @param PrestataireDataTable $prestataireDataTable
     *
     * @return Response
     */
    public function index(PrestataireDataTable $prestataireDataTable)
    {
        return $prestataireDataTable->render('prestataires.index');
    }

    /**
     * Show the form for creating a new Prestataire.
     *
     * @return Response
     */
    public function create()
    {
        return view('prestataires.create');
    }

    /**
     * Store a newly created Prestataire in storage.
     *
     * @param CreatePrestataireRequest $request
     *
     * @return Response
     */
    public function store(CreatePrestataireRequest $request)
    {
        $input = $request->all();

        $prestataire = $this->prestataireRepository->create($input);

        Flash::success('Prestataire saved successfully.');

        return redirect(route('prestataires.index'));
    }

    /**
     * Display the specified Prestataire.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prestataire = $this->prestataireRepository->find($id);

        if (empty($prestataire)) {
            Flash::error('Prestataire not found');

            return redirect(route('prestataires.index'));
        }

        return view('prestataires.show')->with('prestataire', $prestataire);
    }

    /**
     * Show the form for editing the specified Prestataire.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prestataire = $this->prestataireRepository->find($id);

        if (empty($prestataire)) {
            Flash::error('Prestataire not found');

            return redirect(route('prestataires.index'));
        }

        return view('prestataires.edit')->with('prestataire', $prestataire);
    }

    public function activate($id)
    {
        $prestataire = $this->prestataireRepository->find($id);

        if (empty($prestataire)) {
            Flash::error('Prestataire not found');

        }
        $prestataire->fill(["verified_at" => now(), 'verified' => true])->save();

        return redirect(route('prestataires.index'));

    }

    /**
     * Update the specified Prestataire in storage.
     *
     * @param int $id
     * @param UpdatePrestataireRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePrestataireRequest $request)
    {
        $prestataire = $this->prestataireRepository->find($id);

        if (empty($prestataire)) {
            Flash::error('Prestataire not found');

            return redirect(route('prestataires.index'));
        }

        $prestataire = $this->prestataireRepository->update($request->all(), $id);

        Flash::success('Prestataire updated successfully.');

        return redirect(route('prestataires.index'));
    }

    /**
     * Remove the specified Prestataire from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prestataire = $this->prestataireRepository->find($id);

        if (empty($prestataire)) {
            Flash::error('Prestataire not found');

            return redirect(route('prestataires.index'));
        }

        $this->prestataireRepository->delete($id);

        Flash::success('Prestataire deleted successfully.');

        return redirect(route('prestataires.index'));
    }
}
