<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactusRequest;
use App\Http\Requests\UpdateContactusRequest;
use App\Repositories\ContactusRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ContactusController extends AppBaseController
{
    /** @var  ContactusRepository */
    private $contactusRepository;

    public function __construct(ContactusRepository $contactusRepo)
    {
        $this->contactusRepository = $contactusRepo;
    }

    /**
     * Display a listing of the Contactus.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $contactuses = $this->contactusRepository->paginate(10);

        return view('contactuses.index')
            ->with('contactuses', $contactuses);
    }

    /**
     * Show the form for creating a new Contactus.
     *
     * @return Response
     */
    public function create()
    {
        return view('contactuses.create');
    }

    /**
     * Store a newly created Contactus in storage.
     *
     * @param CreateContactusRequest $request
     *
     * @return Response
     */
    public function store(CreateContactusRequest $request)
    {
        $input = $request->all();

        $contactus = $this->contactusRepository->create($input);

        Flash::success('Contactus saved successfully.');


        return view ('blades.contactus');
        // return redirect(route('contactuses.index'));
    }

    /**
     * Display the specified Contactus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contactus = $this->contactusRepository->find($id);

        if (empty($contactus)) {
            Flash::error('Contactus not found');

            return redirect(route('contactuses.index'));
        }

        return view('contactuses.show')->with('contactus', $contactus);
    }

    /**
     * Show the form for editing the specified Contactus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contactus = $this->contactusRepository->find($id);

        if (empty($contactus)) {
            Flash::error('Contactus not found');

            return redirect(route('contactuses.index'));
        }

        return view('contactuses.edit')->with('contactus', $contactus);
    }

    /**
     * Update the specified Contactus in storage.
     *
     * @param int $id
     * @param UpdateContactusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContactusRequest $request)
    {
        $contactus = $this->contactusRepository->find($id);

        if (empty($contactus)) {
            Flash::error('Contactus not found');

            return redirect(route('contactuses.index'));
        }

        $contactus = $this->contactusRepository->update($request->all(), $id);

        Flash::success('Contactus updated successfully.');

        return redirect(route('contactuses.index'));
    }

    /**
     * Remove the specified Contactus from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contactus = $this->contactusRepository->find($id);

        if (empty($contactus)) {
            Flash::error('Contactus not found');

            return redirect(route('contactuses.index'));
        }

        $this->contactusRepository->delete($id);

        Flash::success('Contactus deleted successfully.');

        return redirect(route('contactuses.index'));
    }
}
