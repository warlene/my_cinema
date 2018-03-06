<link href="./webroot/css/list.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="./webroot/js/list.js"></script>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1>La filmothèque de MyCinema</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3>Liste de tous les films</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
          <form class="form-inline" id="title-form" action="film/search_title" method="post" role="form">
            <input type="search" id="search" value="" class="form-control" placeholder="Rechercher un film par titre">
            <input type="submit" value="Go!">
          </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th>First column</th>
                        <th>Second column</th>
                        <th>Third column</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Introducing</td>
                        <td>jQuery</td>
                        <td>Searchable</td>
                    </tr>
                    <tr>
                        <td>Lorem</td>
                        <td>Ipsum</td>
                        <td>Dolor</td>
                    </tr>
                    <tr>
                        <td>Some</td>
                        <td>More</td>
                        <td>Data</td>
                    </tr>
                </tbody>
            </table>
            <hr>
        </div>
    </div>
  </div>
<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
