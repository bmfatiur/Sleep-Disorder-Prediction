<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predict Sleep Disorder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px; /* Add some padding for better aesthetics */
        }

        form {
            max-width: 400px; /* Adjust the form width as needed */
            margin: 0 auto; /* Center the form horizontally */
        }

        h1 {
            text-align: center; /* Center the heading */
            margin-bottom: 30px; /* Add some space below the heading */
        }
        .container{
            padding-top: 120px;
        }
    </style>
</head>

<body>
    <x-app-layout>
        <div class="container")>
            <h1>Predict Sleep Disorder</h1>

            <form action="{{ route('predictSleepDisorder') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" class="form-control" name="Age" id="age" required>
                </div>

                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select class="form-control" name="Gender" id="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="daily_steps">Daily Steps:</label>
                    <input type="number" class="form-control" name="DailySteps" id="dailysteps" required>
                </div>

                <div class="form-group">
                    <label for="occupation">Occupation:</label>
                    <select class="form-control" name="Occupation" id="occupation" required>
                        <option value="Accountant">Accountant</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Engineer">Engineer</option>
                        <option value="Lawyer">Lawyer</option>
                        <option value="Manager">Manager</option>
                        <option value="Nurse">Nurse</option>
                        <option value="Sales Representative">Sales Representative</option>
                        <option value="Salesperson">Salesperson</option>
                        <option value="Scientist">Scientist</option>
                        <option value="Software Engineer">Software Engineer</option>
                        <option value="Teacher">Teacher</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Predict</button>
            </form>
        </div>
    </x-app-layout>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>