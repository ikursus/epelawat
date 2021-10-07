<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>{{ config('app.name') }}</title>
    <style>
        body {
            padding-top: 50px;
        }
    </style>
  </head>
  <body>
      <div class="container">

        <div class="row mb-5">
            <div class="col-12">
                <h1 class="text-center"><?php echo $tajukHalaman; ?></h1>
            </div>
        </div>

        <div class="row">

            <div class="col-12">

                <table class="table table-bordered">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAMA</th>
                            <th>EMAIL</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($senaraiUsers as $user):
                        ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['nama']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>

                </table>

            </div>

        </div>

        <div class="row mt-5">
            <div class="col-12">
                <p class="text-center">{{ config('epelawat.copyright_notice') }}</p>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
  </body>
</html>
