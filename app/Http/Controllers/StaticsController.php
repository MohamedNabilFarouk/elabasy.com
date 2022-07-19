<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStaticsRequest;
use App\Http\Requests\UpdateStaticsRequest;
use App\Repositories\StaticsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class StaticsController extends AppBaseController
{
    /** @var  StaticsRepository */
    private $staticsRepository;

    public function __construct(StaticsRepository $staticsRepo)
    {
        $this->staticsRepository = $staticsRepo;
    }

    /**
     * Display a listing of the Statics.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $statics = $this->staticsRepository->paginate(10);

        return view('statics.index')
            ->with('statics', $statics);
    }

    /**
     * Show the form for creating a new Statics.
     *
     * @return Response
     */
    public function create()
    {
        return view('statics.create');
    }

    /**
     * Store a newly created Statics in storage.
     *
     * @param CreateStaticsRequest $request
     *
     * @return Response
     */
    public function store(CreateStaticsRequest $request)
    {
        $input = $request->all();

        $statics = $this->staticsRepository->create($input);

        Flash::success('Statics saved successfully.');

        return redirect(route('statics.index'));
    }

    /**
     * Display the specified Statics.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $statics = $this->staticsRepository->find($id);

        if (empty($statics)) {
            Flash::error('Statics not found');

            return redirect(route('statics.index'));
        }

        return view('statics.show')->with('statics', $statics);
    }

    /**
     * Show the form for editing the specified Statics.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $statics = $this->staticsRepository->find($id);

        if (empty($statics)) {
            Flash::error('Statics not found');

            return redirect(route('statics.index'));
        }

        return view('statics.edit')->with('statics', $statics);
    }

    /**
     * Update the specified Statics in storage.
     *
     * @param int $id
     * @param UpdateStaticsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStaticsRequest $request)
    {
        $statics = $this->staticsRepository->find($id);

        if (empty($statics)) {
            Flash::error('Statics not found');

            return redirect(route('statics.index'));
        }

        $statics = $this->staticsRepository->update($request->all(), $id);

        Flash::success('Statics updated successfully.');

        return redirect(route('statics.index'));
    }

    /**
     * Remove the specified Statics from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $statics = $this->staticsRepository->find($id);

        if (empty($statics)) {
            Flash::error('Statics not found');

            return redirect(route('statics.index'));
        }

        $this->staticsRepository->delete($id);

        Flash::success('Statics deleted successfully.');

        return redirect(route('statics.index'));
    }
}
