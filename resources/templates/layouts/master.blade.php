<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <!-- use the following meta to force IE use its most up to date rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <title> page tite </title>
        <meta name="description" content="" />

        {!! HTML::style('css/ace/bootstrap.css') !!}
        {!! HTML::style('css/ace/font-awesome.css') !!}
        {!! HTML::style('css/ace/ace-fonts.css') !!}
        <!-- Third party css files such as chosen.css or ui.jqgrid.css -->
        {!! HTML::style('css/ace/ace.css') !!}
        {!! HTML::style('css/ace/ace-part2.css') !!}

        {!! HTML::script('js/ace/ace-extra.js') !!}

    </head>

<body class="no-skin">
    <div class="navbar" id="navbar">
    <!-- navbar goes here -->
    </div>

    <div class="main-container" id="main-container">
        <div class="sidebar responsive" id="sidebar">
        <!-- sidebar goes here -->
        </div>

        <div class="main-content">
            <div class="breadcrumbs">
            <!-- breadcrumbs goes here -->
            </div>

            <div class="page-content">
                <!-- setting box goes here if needed -->

                <div class="row">
                    <div class="col-xs-12">
                    <!-- page content goes here -->
                    </div><!-- /.col -->
                </div><!-- /.row -->

            </div><!-- /.page-content -->
        </div><!-- /.main-content -->

        <!-- footer area -->

    </div><!-- /.main-container -->

    <!-- list of script files -->
    {!! HTML::script('js/ace/jquery.js') !!}
    {!! HTML::script('js/ace/bootstrap.js') !!}
    <!-- Third party JS files such as chosen.js -->
    {!! HTML::script('js/ace/ace-elements.js') !!}
    {!! HTML::script('js/ace/ace.js') !!}

 </body>
</html>
