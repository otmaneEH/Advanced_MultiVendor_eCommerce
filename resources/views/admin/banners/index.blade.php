@extends('admin.layouts.master')

@section('admin_content')

<div class="content-wrapper">
    <div class="content">						
          <div class="breadcrumb-wrapper">
                          <h1>Banner</h1>
                          
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb p-0">
      <li class="breadcrumb-item">
        <a href="index.html">
          <span class="mdi mdi-home"></span>                
        </a>
      </li>
      <li class="breadcrumb-item">
        All
      </li>
      <li class="breadcrumb-item" aria-current="page">table</li>
    </ol>
  </nav>

                      </div>

                      <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="card card-default">
                                
                                <div class="card-body">
                                
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">1</td>
                                                <td>Lucia</td>
                                                <td>Christ</td>
                                                <td>@Lucia</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">2</td>
                                                <td>Catrin</td>
                                                <td>Seidl</td>
                                                <td>@catrin</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">3</td>
                                                <td>Lilli</td>
                                                <td>Kirsh</td>
                                                <td>@lilli</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">4</td>
                                                <td>Else</td>
                                                <td>Voigt</td>
                                                <td>@voigt</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">5</td>
                                                <td>Ursel</td>
                                                <td>Harms</td>
                                                <td>@ursel</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">6</td>
                                                <td>Anke</td>
                                                <td>Sauter</td>
                                                <td>@Anke</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                         
                      </div>
    
@endsection