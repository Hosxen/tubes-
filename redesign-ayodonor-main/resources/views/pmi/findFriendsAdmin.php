<?php include "views/layout/navbar.php" ?>

<div class="container pb-5">
    <div class="row my-5 mx-1">
        <div class="col-12 bg-red10 table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Handphone</th>
                    <th scope="col">Golongan Darah</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Bandung</td>
                    <td>081776553445</td>
                    <td>A</td>
                    <td>
                        <form method="get" action="donor">
<!--                            <input type="hidden" name="schedule_id" value="--><?php //echo $schedule['id'] ?><!--">-->
                            <button type="submit" class="btn btn-success m-2">Update</button>
                            <button type="submit" class="btn btn-danger m-2">Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Jakarta</td>
                    <td>081992738665</td>
                    <td>B</td>
                    <td>
                        <form method="get" action="donor">
                            <!--                            <input type="hidden" name="schedule_id" value="--><?php //echo $schedule['id'] ?><!--">-->
                            <button type="submit" class="btn btn-success m-2">Update</button>
                            <button type="submit" class="btn btn-danger m-2">Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>Jawa Barat</td>
                    <td>081928776526</td>
                    <td>O</td>
                    <td>
                        <form method="get" action="donor">
                            <!--                            <input type="hidden" name="schedule_id" value="--><?php //echo $schedule['id'] ?><!--">-->
                            <button type="submit" class="btn btn-success m-2">Update</button>
                            <button type="submit" class="btn btn-danger m-2">Delete</button>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?php include "views/layout/footer.php" ?>
