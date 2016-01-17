@extends('main')

@section('title')
Login
@endsection

@section('styles')

@endsection

@section('content')

    <div class="page-content">
      
          <div class="portlet light">
            <div class="portlet-body">
                <div class="tabbable-custom nav-justified">
                  <div class="row">
                      
                        <ul class="nav nav-tabs ">
                              <li class="active">
                                <a href="#options" data-toggle="tab">Change Options</a>
                              </li>
                              <li class=>
                                <a href="#users" data-toggle="tab">Users Control</a>
                              </li>
                              <li class=>
                                <a href="#update" data-toggle="tab">Update</a>
                              </li>
                        </ul>                       
                             
                        <div class="tab-content row">
                             <div class="tab-pane active" id="options">
                                <!-- Add new Controls -->
                                  <div class="col-md-12">
                                       <div class="portlet light boardered ">
                                          <div class="portlet-title">
                                            <div class="caption">
                                              Add New Elements
                                            </div>
                                            <div class="tools">
                                                  <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                  <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                            </div>
                                          </div>
                                          <div class="portlet-body">
                                            <form action="{{route('admin.store')}}" method="post">
                                              {{csrf_field()}}
                                                <div class="form-group">
                                                <label>Value</label>
                                                <input type="text" class="form-control" name="value">
                                                </div>
                                                <div class="form-group">
                                                <label>Field</label>
                                                <select name="field" class="form-control"> Field
                                                    <option value="catagory"> Catagorys </option>
                                                    <option value="branch"> Branch</option>
                                                </select>
                                                </div>
                                                <input type="submit" class="btn btn-success" value="Add">
                                            </form>
                                          </div>
                                  </div>
                                <!-- Panel to Support The book catagories -->
                                  <div class="col-md-12">
                                    <div class="portlet light boardered ">
                                          <div class="portlet-title">
                                            <div class="caption">
                                              Catagorys For Books
                                            </div>
                                            <div class="tools">
                                                  <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                  <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                            </div>
                                          </div>
                                          <div class="portlet-body">                                           
                                            <table class="table table-hover table-striped">
                                              <thead>
                                                <tr>
                                                  <th>Control-Index</th>
                                                  <th>Control-Type</th>
                                                  <th>Value</th>
                                                  <th>Change</th>
                                                  <th>Remove</th>
                                                </tr>
                                              </thead>
                                              @if(isset($catagories))
                                              <tbody>
                                              @foreach($catagories as $catagory)
                                                <tr>
                                                  <td>{{$catagory->id}}</td>
                                                  <td>{{$catagory->field}}</td>
                                                  <td>{{$catagory->value}}</td>
                                                  <td>
                                                    <a href="{{route('admin.edit',['id'=>$catagory->id])}}" class="btn blue">Edit</a>
                                                  </td>
                                                  <td>
                                                    <form class="form-horizontal" role="form" method="get" action="{{ route('admin.destroy',['id'=>$catagory->id]) }}">
                                                                 {!! csrf_field() !!}
                                                        <input type="hidden" name="_method" value="delete">
                                                        <input type="hidden" name="value" value="delete">
                                                      <input type="submit" class="btn btn-danger" value="Close Deal">
                                                    </form>
                                                  </td>
                                                </tr>
                                              @endforeach
                                              </tbody>
                                              @endif
                                            </table>
                                          </div>
                                          <div class="portlet-footer">
                                            Manage the catagories
                                          </div>
                                    </div>
                                  </div>
                                <!-- Panel to Manage The Branches -->
                                  <div class="col-md-12">
                                     <div class="portlet light boardered">
                                          <div class="portlet-title">
                                            <div class="caption">
                                              Branch options for the users
                                            </div>
                                            <div class="tools">
                                                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                            </div>
                                          </div>
                                          <div class="portlet-body">                                            
                                            <table class="table table-hover table-striped">
                                              <thead>
                                                <tr>
                                                  <th>Control-Index</th>
                                                  <th>Control-Type</th>
                                                  <th>Value</th>
                                                  <th>Change</th>
                                                  <th>Remove</th>
                                                </tr>
                                              </thead>
                                              @if(isset($branches))
                                              <tbody>
                                              @foreach($branches as $branch)
                                                <tr>
                                                  <td>{{$branch->id}}</td>
                                                  <td>{{$branch->field}}</td>
                                                  <td>{{$branch->value}}</td>
                                                  <td>
                                                    <a href="{{route('admin.edit',['id'=>$branch->id])}}" class="btn blue">Edit</a>
                                                  </td>
                                                  <td>
                                                    <form class="form-horizontal" role="form" method="get" action="{{ route('admin.destroy',['id'=>$branch->id]) }}">
                                                                 {!! csrf_field() !!}
                                                        <input type="hidden" name="_method" value="delete">
                                                        <input type="hidden" name="value" value="delete">
                                                      <input type="submit" class="btn btn-danger" value="Close Deal">
                                                    </form>
                                                  </td>
                                                </tr>
                                              @endforeach
                                              </tbody>
                                              @endif
                                            </table>
                                          </div>
                                          <div class="portlet-footer">
                                              Manage the Branches
                                          </div>
                                     </div>
                                  </div>
                             </div>
                             </div>
                             <div class="tab-pane" id="users">
                                  <div class="col-md-12">
                                    <div class="portlet light boardered ">
                                        <div class="portlet-title">
                                          <div class="caption">
                                            All Users
                                          </div>
                                          <div class="tools">
                                                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                                <table class="table table-hover" id="table1">
                                            <thead>
                                              <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Enrollment number</th>
                                                <th>Branch</th>
                                                <th>Take Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($users) )
                                              @foreach ($users as $user) 
                                                @if($user->id != Auth::user()->id)
                                                <tr >
                                                  <td>{{$user->name}}</td>
                                                  <td>{{$user->email}}</td>           
                                                  <td>{{$user->enrollment_number}}
                                                  </td>
                                                  <td>{{$user->getBranch()->get()->first()->value}}
                                                  </td>
                                                  <td>
                                                  @if($user->state==0)
                                                    <form  role="form" method="POST" action="{{ route('admin.update',['id'=>$user->id]) }}">
                                                              {!! csrf_field() !!}
                                                      <input type="hidden" name='_method' value="put">
                                                      <input type="hidden" name="state" value="1">
                                                      <div class="form-group">
                                                      <input type="submit" class="btn red" value="Disable"></input>
                                                      </div>
                                                    </form>
                                                  @else
                                                    <form  role="form" method="POST" action="{{ route('admin.update',['id'=>$user->id]) }}">
                                                              {!! csrf_field() !!}
                                                      <input type="hidden" name="state" value="0">
                                                      <div class="form-group">
                                                      <input type="submit" class="btn green" value="Enable"></input>
                                                      </div>
                                                    </form>                                                 
                                                                                               
                                                 @endif
                                                  </td>
                                                </tr>
                                                @endif
                                              @endforeach
                                            @endif
                                            </tbody>
                                          </table>
                                        </div>
                                    </div>
                                  </div>
                             </div>
                        </div>
                      </div>  
                  </div>                  
                </div>
            </div>
          </div> 
        
    </div>
   

  
@endsection

@section('scripts')

@endsection