<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow" style="width: 420px;">
        <div class="card-body">
            <h4 class="text-center mb-3">Forgot Password</h4>
            <p class="text-center text-muted mb-4">
                Enter your email address below and we'll send you a link to reset your password.
            </p>

            <!-- ALERT SUKSES -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <!-- FORM -->
            <form method="POST" action="{{ url('/forgot-password') }}">
                @csrf

                <!-- EMAIL -->
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}"
                        placeholder="your@email.com"
                        required
                    >

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- BUTTON -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">
                        Send Password Reset Link
                    </button>
                </div>
            </form>

            <!-- LINK -->
            <div class="text-center mt-3">
                <a href="{{ url('/login') }}">
                Back to login
                </a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
