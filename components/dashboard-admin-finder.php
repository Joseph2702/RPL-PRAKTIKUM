<form class="card px-4 py-2" action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
    <div class="row">
        <div class="col-12 col-lg-2 my-2">
            <select name="page" class="form-select form-select-sm">
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <option value="<?= $i; ?>" <?php if (isset($_GET['page']) && $_GET['page'] == "$i") {
                          print 'selected';
                      } ?>>Halaman <?= $i; ?>
                    </option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="col-12 col-lg-2 my-2">
            <div class="input-group input-group-sm">
                <input name="searchData" type="text" class="form-control form-control-sm"
                    placeholder="Cari di semua kriteria..." value="<?php if (isset($_GET['searchData'])) {
                        echo $_GET['searchData'];
                    } ?>">
            </div>
        </div>
        <div class="col-12 col-lg-2 my-2">
            <select name="sortBy" class="form-select form-select-sm">
                <option selected disabled>Urutkan</option>
                <option value="studentAsc" <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "studentAsc") {
                    print 'selected';
                } ?>>Sort
                    by Student Code A-Z</option>
                <option value="studentDesc" <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "studentDesc") {
                    print 'selected';
                } ?>>Sort
                    by Student Code Z-A</option>
                <option value="vehicleAsc" <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "vehicleAsc") {
                    print 'selected';
                } ?>>Sort
                    by Vehicle Type A-Z</option>
                <option value="vehicleDesc" <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "vehicleDesc") {
                    print 'selected';
                } ?>>Sort
                    by Vehicle Type Z-A</option>
                <option value="registerAsc" <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "registerAsc") {
                    print 'selected';
                } ?>>Sort
                    by Vehicle Register A-Z</option>
                <option value="registerDesc" <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "registerDesc") {
                    print 'selected';
                } ?>>
                    Sort by Vehicle Register Z-A</option>
                <option value="memberAsc" <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "memberAsc") {
                    print 'selected';
                } ?>>Sort
                    by Member ID A-Z</option>
                <option value="memberDesc" <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "memberDesc") {
                    print 'selected';
                } ?>>Sort
                    by Member ID Z-A</option>
                <option value="dueAsc" <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "dueAsc") {
                    print 'selected';
                } ?>>Sort by
                    Due Date A-Z</option>
                <option value="dueDesc" <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "dueDesc") {
                    print 'selected';
                } ?>>Sort by
                    Due Date Z-A</option>
            </select>
        </div>
        <div class="col-12 col-lg-2 my-2">
            <div class="input-group input-group-sm">
                <span class="input-group-text">Limit</span>
                <input name="limitData" type="number" class="form-control" placeholder="jumlah baris" value="<?php if (isset($_GET['limitData'])) {
                    echo $_GET['limitData'];
                } else {
                    echo "50";
                } ?>">
                <span class="input-group-text">data</span>
            </div>
        </div>
        <div class="col-12 col-lg-2 my-2">
            <select name="filterVehicleBy" class="form-select form-select-sm">
                <option <?php if (!isset($_GET['filterVehicleBy'])) {
                    echo "selected";
                } ?> disabled>Filter Kendaraan
                </option>
                <option <?php if (isset($_GET['filterVehicleBy']) && $_GET['filterVehicleBy'] == "Mobil") {
                    echo "selected";
                } ?> value="Mobil">Mobil</option>
                <option <?php if (isset($_GET['filterVehicleBy']) && $_GET['filterVehicleBy'] == "Motor") {
                    echo "selected";
                } ?> value="Motor">Motor</option>
            </select>
        </div>
        <div class="col-12 col-lg-2 my-2">
            <div class="row">
                <div class="col-6">
                    <input class="btn btn-sm btn-outline-primary w-100" type="submit" value="Cari">
                </div>
                <div class="col-6">
                    <a class="btn btn-outline-secondary btn-sm w-100" href="<?= $_SERVER['PHP_SELF']; ?>">Reset</a>
                </div>
            </div>
        </div>
    </div>
</form>