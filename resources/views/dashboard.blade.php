@extends('layouts.master')
@section('page_title', 'My Dashboard')
@section('content')
       <div class="row" style="margin: 2px;">
           <div class="col-sm-6 col-xl-3">
               <div class="card card-body bg-blue-400 has-bg-image" style="background-color: rgb(6, 97, 182);color:whitesmoke">
                   <div class="media">
                       <div class="media-body">
                           <h3 class="mb-0"></h3>
                           <span class="text-uppercase font-size-xs font-weight-bold">Total Application</span>
                       </div>

                       <div class="ml-3 align-self-center">
                           <i class="icon-users4 icon-3x opacity-75"></i>
                       </div>
                   </div>
               </div>
           </div>

           <div class="col-sm-6 col-xl-3">
               <div class="card card-body bg-danger-400 has-bg-image" style="background-color: rgb(6, 97, 182);color:whitesmoke">
                   <div class="media">
                       <div class="media-body">
                           <h3 class="mb-0"></h3>
                           <span class="text-uppercase font-size-xs">Total Jobs</span>
                       </div>

                       <div class="ml-3 align-self-center">
                           <i class="icon-users2 icon-3x opacity-75"></i>
                       </div>
                   </div>
               </div>
           </div>

           <div class="col-sm-6 col-xl-3">
               <div class="card card-body bg-success-400 has-bg-image" style="background-color: rgb(6, 97, 182);color:whitesmoke">
                   <div class="media">
                       <div class="mr-3 align-self-center">
                           <i class="icon-pointer icon-3x opacity-75"></i>
                       </div>

                       <div class="media-body text-right">
                           <h3 class="mb-0"></h3>
                           <span class="text-uppercase font-size-xs">Active Jobs</span>
                       </div>
                   </div>
               </div>
           </div>

           <div class="col-sm-6 col-xl-3">
               <div class="card card-body bg-indigo-400 has-bg-image" style="background-color: rgb(6, 97, 182);color:whitesmoke">
                   <div class="media">
                       <div class="mr-3 align-self-center">
                           <i class="icon-user icon-3x opacity-75"></i>
                       </div>

                       <div class="media-body text-right">
                           <h3 class="mb-0"></h3>
                           <span class="text-uppercase font-size-xs">Total Recruiters</span>
                       </div>
                   </div>
               </div>
           </div>
       </div>


    @endsection
