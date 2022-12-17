@extends('layouts.navigationbar')

@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF UPLOAD</title>


    <br><br>
    <h2 style="text-align:center;">PDF UPLOAD</h2>
    <br> <br>
    <div>
    @if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
    @endif
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    </div>
    @endif
    <div class="ext">
        <form action="uploadfile" method="post"enctype="multipart/form-data">
            @csrf
           
            <div class="mb-3">
                <label for="formFile" class="form-label">Select file to upload</label>
                <input name="selectedfile"class="form-control" type="file" id="formFile" required>
              </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
                <textarea name="comment_added" placeholder= "@if(session()->has('comment')){{ session()->get('comment') }}@endif" value="@if(session()->has('comment')){{ session()->get('comment') }}@endif"class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <br><br>

    <div class ="exte">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Comment</th>
                <th scope="col">Name</th>
                <th scope="col">View</th>
                <th scope="col">Download</th>

              </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
              <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->comment}}</td>
                <td>{{$data->name}}</td>
                <td><a href="{{$data->location}}" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
                  </svg></a></td>
                <td></td>

              </tr>
                @endforeach
            </tbody>

        </table>

    </div>

    {{-- a href="download/{{$data->location}}" --}}
<style>
div.ext {
    width: 50%;
    margin: auto;
    /* border: 3px solid #73AD21; */
}
div.exte {
    width: 80%;
    margin: auto;
    /* border: 3px solid #73AD21; */
  }
</style>

@endsection
