<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoVacation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .card-subtitle {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        .card-text {
            color: #6c757d;
        }
        .btn-danger {
            border-radius: 50px;
            padding: 10px 20px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        {{-- <h1 class="text-center mb-4">GoVacation</h1> --}}
        <div class="row justify-content-center">
            @foreach($companies as $company)
                @if ($company->is_active)
                    <x-company-card :company="$company" />
                @endif
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $companies->links() }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
