<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlogsRequest;
use App\Http\Requests\UpdateBlogsRequest;
use App\Repositories\BlogsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BlogsController extends AppBaseController
{
    /** @var  BlogsRepository */
    private $blogsRepository;

    public function __construct(BlogsRepository $blogsRepo)
    {
        $this->blogsRepository = $blogsRepo;
    }

    /**
     * Display a listing of the Blogs.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $blogs = $this->blogsRepository->paginate(10);

        return view('blogs.index')
            ->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new Blogs.
     *
     * @return Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created Blogs in storage.
     *
     * @param CreateBlogsRequest $request
     *
     * @return Response
     */
    public function store(CreateBlogsRequest $request)
    {
        $input = $request->all();


        $File=$request-> file('image');
        $destination= public_path('/images');
        $newfile = rand(1, 999) . $File -> getClientOriginalName();
        $File ->move ($destination , $newfile);
        $input['image'] = $newfile;

        $blogs = $this->blogsRepository->create($input);

        Flash::success('Blogs saved successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Display the specified Blogs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blogs = $this->blogsRepository->find($id);

        if (empty($blogs)) {
            Flash::error('Blogs not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.show')->with('blogs', $blogs);
    }

    /**
     * Show the form for editing the specified Blogs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $blogs = $this->blogsRepository->find($id);

        if (empty($blogs)) {
            Flash::error('Blogs not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.edit')->with('blogs', $blogs);
    }

    /**
     * Update the specified Blogs in storage.
     *
     * @param int $id
     * @param UpdateBlogsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlogsRequest $request)
    {
        $blogs = $this->blogsRepository->find($id);

        $blog=$request->all();
        if($request->hasFile('image')) {
            $File=$request-> file('image');
            $destination= public_path('/images');
            $newfile = rand(1, 999) . $File -> getClientOriginalName();
            $File ->move ($destination , $newfile);
            $blog["image"]= $newfile;
            }

        if (empty($blogs)) {
            Flash::error('Blogs not found');

            return redirect(route('blogs.index'));
        }

        $blogs = $this->blogsRepository->update($blog, $id);

        Flash::success('Blogs updated successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified Blogs from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $blogs = $this->blogsRepository->find($id);

        if (empty($blogs)) {
            Flash::error('Blogs not found');

            return redirect(route('blogs.index'));
        }

        $this->blogsRepository->delete($id);

        Flash::success('Blogs deleted successfully.');

        return redirect(route('blogs.index'));
    }
}
