
 @if ( count($customers) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Customers List
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Customers</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $customer['name']}}</div>
                                </td>

                                <td>
                                    <a href="/customer/{{$customer['id']}}/edit" class="btn btl-primary"> Edit </a>
                                </td>

                                <td>
                                    {!! Form::open(['method' => 'DELETE','url' => ['customer/'.$customer['id']],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

