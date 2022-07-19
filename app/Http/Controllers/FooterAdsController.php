<?php

namespace App\Http\Controllers;

use App\DataTables\FooterAdsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateFooterAdsRequest;
use App\Http\Requests\UpdateFooterAdsRequest;
use App\Repositories\FooterAdsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class FooterAdsController extends AppBaseController
{
    /** @var  FooterAdsRepository */
    private $footerAdsRepository;

    public function __construct(FooterAdsRepository $footerAdsRepo)
    {
        $this->footerAdsRepository = $footerAdsRepo;
    }

    /**
     * Display a listing of the FooterAds.
     *
     * @param FooterAdsDataTable $footerAdsDataTable
     * @return Response
     */
    public function index(FooterAdsDataTable $footerAdsDataTable)
    {
        return $footerAdsDataTable->render('footer_ads.index');
    }

    /**
     * Show the form for creating a new FooterAds.
     *
     * @return Response
     */
    public function create()
    {
        return view('footer_ads.create');
    }

    /**
     * Store a newly created FooterAds in storage.
     *
     * @param CreateFooterAdsRequest $request
     *
     * @return Response
     */
    public function store(CreateFooterAdsRequest $request)
    {
        $input = $request->all();

        $footerAds = $this->footerAdsRepository->create($input);

        Flash::success('Footer Ads saved successfully.');

        return redirect(route('footerAds.index'));
    }

    /**
     * Display the specified FooterAds.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $footerAds = $this->footerAdsRepository->find($id);

        if (empty($footerAds)) {
            Flash::error('Footer Ads not found');

            return redirect(route('footerAds.index'));
        }

        return view('footer_ads.show')->with('footerAds', $footerAds);
    }

    /**
     * Show the form for editing the specified FooterAds.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $footerAds = $this->footerAdsRepository->find($id);

        if (empty($footerAds)) {
            Flash::error('Footer Ads not found');

            return redirect(route('footerAds.index'));
        }

        return view('footer_ads.edit')->with('footerAds', $footerAds);
    }

    /**
     * Update the specified FooterAds in storage.
     *
     * @param  int              $id
     * @param UpdateFooterAdsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFooterAdsRequest $request)
    {
        $footerAds = $this->footerAdsRepository->find($id);

        if (empty($footerAds)) {
            Flash::error('Footer Ads not found');

            return redirect(route('footerAds.index'));
        }

        $footerAds = $this->footerAdsRepository->update($request->all(), $id);

        Flash::success('Footer Ads updated successfully.');

        return redirect(route('footerAds.index'));
    }

    /**
     * Remove the specified FooterAds from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $footerAds = $this->footerAdsRepository->find($id);

        if (empty($footerAds)) {
            Flash::error('Footer Ads not found');

            return redirect(route('footerAds.index'));
        }

        $this->footerAdsRepository->delete($id);

        Flash::success('Footer Ads deleted successfully.');

        return redirect(route('footerAds.index'));
    }
}
