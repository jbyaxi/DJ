@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <?php
                        try{
                            $dbc = new $PDO('mysql:dbname=dj;host=127.0.0.1','root','')
                            //retrieve the id of the current user for following query
                            $id  = Auth::user()->id;
                            //retrieve the list of the most listenned music by the user
                            //Working on 'SQL server'
                            $dbc->exec('SELECT music.name FROM music INNER JOIN lecture ON id='+$id+' ORDER BY (COUNT )  DESCEND')
                        }catch{
                            echo'Connection failed: '.$e->getMessage();
                        }
                            

                        ?>

                        <audio controls>
                            
                        </audio controls>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
