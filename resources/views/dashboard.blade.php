<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Nilai Mahasiswa TOEIC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center text-center p-3">
            <h3>Data Nilai EIC</h3>
            @foreach ($mkDataGraph as $mk => $data)
                @if ($data->isNotEmpty())
                    <div class="col-md-6 mt-3">
                        <h5>{{ $mk }}</h5>
                        <canvas id="chart-{{ $mk }}" class="chart-container" data-mk="{{ $mk }}"
                            data-chart-data="{{ json_encode($data) }}"></canvas>
                    </div>
                @endif
            @endforeach
        </div>

        <div class="row justify-content-center text-center my-3">
            <h4>Data Nilai Tabel</h4>
            <div class="col-md-8">
                <select id="selectEIC" class="form-select form-select-sm fw-bold border border-dark">
                    <option value="">Pilih Mata Kuliah</option>
                    @foreach ($mkList as $mk)
                        <option value="{{ $mk }}">{{ $mk }}</option>
                    @endforeach
                </select>
                <div id="EICTableContainer" class="mt-2"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="js/chartNilai.js"></script>
    <script src="js/dataTabel.js"></script>
</body>

</html>
