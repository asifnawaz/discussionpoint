@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
            {{ __('Dashboard') }}
            </header>
            <div class="w-full p-6">
            <table class="table users-dt">
            <thead>
                <tr>
                    <th style="width:70%">Name</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
            </div>
        </section>
    </div>
</main>
@endsection

@section('footerscripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(function () {
        var table = $('.users-dt').DataTable({
            processing: true,
            serverSide: true,
            ajax: "/",
            columns: [
                {
                    data: 'name',
                    name: 'users.name'
                },
                {
                    data: 'view',
                    name: '',
                    orderable: false,
                    searchable: false
                },
            ]
        });

    });
</script>

@endsection