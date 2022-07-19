<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdsRequest;
use App\Http\Requests\UpdateAdsRequest;
use App\Repositories\AdsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AdsController extends AppBaseController
{
    /** @var  AdsRepository */
    private $adsRepository;

    public function __construct(AdsRepository $adsRepo)
    {
        $this->adsRepository = $adsRepo;
    }

    /**
     * Display a listing of the Ads.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ads = $this->adsRepository->paginate(10);

        return view('ads.index')
            ->with('ads', $ads);
    }

    /**
     * Show the form for creating a new Ads.
     *
     * @return Response
     */
    public function create()
    {
        return view('ads.create');
    }

    /**
     * Store a newly created Ads in storage.
     *
     * @param CreateAdsRequest $request
     *
     * @return Response
     */
    public function store(CreateAdsRequest $request)
    {
        $input = $request->all();

        $File=$request-> file('image');
        $destination= public_path('/images');
        $newfile = rand(1, 999) . $File -> getClientOriginalName();
        $File ->move ($destination , $newfile);
        $input['image'] = $newfile;


        $ads = $this->adsRepository->create($input);

        Flash::success('Ads saved successfully.');

        return redirect(route('ads.index'));
    }

    /**
     * Display the specified Ads.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ads = $this->adsRepository->find($id);

        if (empty($ads)) {
            Flash::error('Ads not found');

            return redirect(route('ads.index'));
        }

        return view('ads.show')->with('ads', $ads);
    }

    /**
     * Show the form for editing the specified Ads.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ads = $this->adsRepository->find($id);

        if (empty($ads)) {
            Flash::error('Ads not found');

            return redirect(route('ads.index'));
        }

        return view('ads.edit')->with('ads', $ads);
    }

    /**
     * Update the specified Ads in storage.
     *
     * @param int $id
     * @param UpdateAdsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdsRequest $request)
    {
        $ads = $this->adsRepository->find($id);

        $ads=$request->all();
        if($request->hasFile('image')) {
            $File=$request-> file('image');
            $destination= public_path('/images');
            $newfile = rand(1, 999) . $File -> getClientOriginalName();
            $File ->move ($destination , $newfile);
            $ads["image"]= $newfile;
            }

        if (empty($ads)) {
            Flash::error('Ads not found');

            return redirect(route('ads.index'));
        }

        $ads = $this->adsRepository->update($ads, $id);

        Flash::success('Ads updated successfully.');

        return redirect(route('ads.index'));
    }

    /**
     * Remove the specified Ads from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ads = $this->adsRepository->find($id);

        if (empty($ads)) {
            Flash::error('Ads not found');

            return redirect(route('ads.index'));
        }

        $this->adsRepository->delete($id);

        Flash::success('Ads deleted successfully.');

        return redirect(route('ads.index'));
    }
}
