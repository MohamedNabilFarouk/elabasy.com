<?php



namespace App\Http\Controllers;



use App\DataTables\accountDataTable;

use App\Http\Requests;

use App\Http\Requests\CreateaccountRequest;

use App\Http\Requests\UpdateaccountRequest;

use App\Repositories\accountRepository;

use Flash;

use App\Http\Controllers\AppBaseController;

use Response;

use App\Models\account;

use App\Models\Order;

use App\Models\Product;



class accountController extends AppBaseController

{

    /** @var  accountRepository */

    private $accountRepository;



    public function __construct(accountRepository $accountRepo)

    {

        $this->accountRepository = $accountRepo;

    }



    /**

     * Display a listing of the account.

     *

     * @param accountDataTable $accountDataTable

     * @return Response

     */

    public function index(accountDataTable $accountDataTable)

    {

        return $accountDataTable->render('accounts.index');

    }



    /**

     * Show the form for creating a new account.

     *

     * @return Response

     */

    public function create()

    {

        return view('accounts.create');

    }



    /**

     * Store a newly created account in storage.

     *

     * @param CreateaccountRequest $request

     *

     * @return Response

     */

    public function store(CreateaccountRequest $request)

    {

        $input = $request->all();



        $account = $this->accountRepository->create($input);



        Flash::success('Account saved successfully.');



        return redirect(route('accounts.index'));

    }



    /**

     * Display the specified account.

     *

     * @param  int $id

     *

     * @return Response

     */

    public function show($id)

    {

        $account = $this->accountRepository->find($id);



        if (empty($account)) {

            Flash::error('Account not found');



            return redirect(route('accounts.index'));

        }

        $allorder=Account::with('orders')->find($id);

        //dd($allorder);

        return view('accounts.orderAcc')->with('account', $account)->with('allorder',$allorder);

    }



    /**

     * Show the form for editing the specified account.

     *

     * @param  int $id

     *

     * @return Response

     */

    public function edit($id)

    {

        $account = $this->accountRepository->find($id);



        if (empty($account)) {

            Flash::error('Account not found');



            return redirect(route('accounts.index'));

        }



        return view('accounts.edit')->with('account', $account);

    }



    /**

     * Update the specified account in storage.

     *

     * @param  int              $id

     * @param UpdateaccountRequest $request

     *

     * @return Response

     */

    public function update($id, UpdateaccountRequest $request)

    {

        $account = $this->accountRepository->find($id);



        if (empty($account)) {

            Flash::error('Account not found');



            return redirect(route('accounts.index'));

        }



        $account = $this->accountRepository->update($request->all(), $id);



        Flash::success('Account updated successfully.');



        return redirect(route('accounts.index'));

    }



    /**

     * Remove the specified account from storage.

     *

     * @param  int $id

     *

     * @return Response

     */

    public function destroy($id)

    {

        $account = $this->accountRepository->find($id);



        if (empty($account)) {

            Flash::error('Account not found');



            return redirect(route('accounts.index'));

        }



        $this->accountRepository->delete($id);



        Flash::success('Account deleted successfully.');



        return redirect(route('accounts.index'));

    }

}

