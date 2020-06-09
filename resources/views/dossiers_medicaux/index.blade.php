@extends('layouts.app')
@section('content')
    @section ('page_title')
    Dossiers    @endsection
    <div class="row"> 
       
        <div class="col-lg-12">
                @if (session('ok'))
       
                <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <a href="#" class="alert-link"><strong> {{ session('ok') }}</strong></a> 
                </div>
             @endif       
            <div class="card alert">
                <!-- table -->
            <a href="{{route('dossier.create')}}" class="btn btn-success btn-rounded btn-addon btn-sm m-b-10 m-l-5"><i class="ti-user"></i>@lang('Ajouter dossier')</a>
                
                <div class="card-body">
                        <div class="panel panel-info m-t-15" id="cont">
                                <div class="panel-heading">Liste des dossiers</div>
                                <div class="panel-body">

                        <div class="table-responsive" >
                            <table id="example" class="display responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>@lang('Nom')</th>
                                        <th>@lang('Rôle')</th>
                                        <th>@lang('Email')</th>
                                        <th>@lang('Téléphone')</th>
                                        <th>@lang('Adresse')</th>
                                        <th>@lang('Secteur')</th>
                                       
            
                                        <th>@lang('Action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($dossiers as $dossier)
                                    <tr>
                                        
                                        <td>
                                         {{ $dossier->civilite }} {{$dossier->nom}} {{$dossier->prenom}} 
                                        </td>
                                        <td>
                                        {{$dossier->role}}  
                                   
                                        <td style="color: #32ade1; text-decoration: underline;">
                                        <strong>{{$dossier->email}}</strong> 
                                        </td>
                                        <td style="color: #e05555;; text-decoration: underline;">
                                            <strong> {{$dossier->telephone1}} </strong> 
                                        </td>
                                        {{-- <td>
                                            {{$dossier->adresse}} 
                                        </td> --}}
                                        <td>
                                            {{$dossier->adresse}}   
                                        </td>    
                                        <td>
                                            {{$dossier->secteur}}   
                                        </td>                                     
                                       
                                        <td width="13%">
                                            <span><a href="{{route('dossier.show',Crypt::encrypt($dossier->id) )}}" data-toggle="tooltip" title="@lang('Détails de ') {{ $dossier->nom }}"><i class="large material-icons color-info">visibility</i></a> </span>
                                            <span><a href="{{route('dossier.edit',Crypt::encrypt($dossier->id) )}}" data-toggle="tooltip" title="@lang('Modifier ') {{ $dossier->nom }}"><i class="large material-icons color-warning">edit</i></a></span>
                                            {{-- <span><a href="{{route('switch_user',Crypt::encrypt($dossier->id) )}}" data-toggle="tooltip" title="@lang('Se connecter en tant que ') {{ $dossier->nom }}"><i class="large material-icons color-success">person_pin</i></a></span> --}}
                                            
                                        <span><a  href="{{route('dossier.archive',[$dossier->id,1])}}" class="delete" data-toggle="tooltip" title="@lang('Archiver ') {{ $dossier->nom }}"><i class="large material-icons color-danger">delete</i> </a></span>
                                        </td>
                                    </tr>
                            @endforeach
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                    </div>
                <!-- end table -->


            </div>
        </div>
    </div>
@endsection

@section('js-content')
<script>
        $(function() {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            })
            $('[data-toggle="tooltip"]').tooltip()
            $('body').on('click','a.delete',function(e) {
                let that = $(this)
                e.preventDefault()
                const swalWithBootstrapButtons = swal.mixin({
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
})

        swalWithBootstrapButtons({
            title: '@lang('Vraiment archiver cet dossier  ?')',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: '@lang('Oui')',
            cancelButtonText: '@lang('Non')',
            
        }).then((result) => {
            if (result.value) {
                $('[data-toggle="tooltip"]').tooltip('hide')
                    $.ajax({                        
                        url: that.attr('href'),
                        type: 'PUT'
                    })
                    .done(function () {
                            that.parents('tr').remove()
                    })

                swalWithBootstrapButtons(
                'Archivé!',
                'L\'dossier a bien été archivé.',
                'success'
                )
                
                
            } else if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons(
                'Annulé',
                'L\'utlisateur n\'a pas été archivé :)',
                'error'
                )
            }
        })
            })
        })
    </script>
@endsection