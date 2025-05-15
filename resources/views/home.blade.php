<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-warning">
        <div class="container">
            <a class="navbar-brand text-dark" href="/">To Do List</a>
        </div>
    </nav>
    

    <div class="container mt-4">
        <!-- Search Bar -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Type here" aria-label="Task input">
                    <button class="btn btn-success" type="button">Add</button>
                </div>
            </div>
        </div>
        
        <!-- Task List -->
        <div class="mt-4">
            <div class="container">
                <div class="row">
                    
                    <!-- Task 1 -->
                    <div class="alert alert-light d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1">{{ $Task1 }}</h5>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-secondary" title="Detail">View</button>
                            <button class="btn btn-sm btn-warning" title="Edit">Edit</button>
                        <button class="btn btn-sm btn-success" title="Done">Done</button>
                        </div>
                    </div>
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <!-- Task 2 -->
                    <div class="alert alert-light d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-0">{{ $Task2 }}</h5>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-secondary" title="Detail">View</button>
                            <button class="btn btn-sm btn-warning">Edit</button>
                            <button class="btn btn-sm btn-success">Done</button>
                        </div>
            </div>
        </div>
    </div>

</body>
</html>
