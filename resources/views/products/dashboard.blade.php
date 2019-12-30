@extends('layouts.master')


@section('title')
Dashboard | Netlinks interns
    @endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Simple Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>FirsName</th>
                            <th>LastName</th>
                            <th>phone</th>
                            <th>Email</th>
                            <th>Country</th>

                            </thead>
                            <tbody>
                            <tr>
                                <td>Dakota Rice</td>
                                <td>Niger</td>
                                <td>Oud-Turnhout</td>
                                <td class="text-right">
                                    $36,738
                                </td>
                            </tr>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


  @endsection


@section('scripts')


    @endsection
