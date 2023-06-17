<!DOCTYPE html>
<html>
<head>
    <title>Multi-Step Form</title>
</head>
<body>
    <form action="process_form.php" method="post">
        <!-- Step 1 -->
        <div class="form-step form-step-active">
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>

        <!-- Step 2 -->
        <div class="form-step">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" required>

            <label for="address">Address:</label>
            <input type="text" name="address" required>
        </div>

        <!-- Step 3 -->
        <div class="form-step">
            <label for="skill">Skill:</label>
            <input type="text" name="skill" required>

            <label for="qualification">Highest Qualification:</label>
            <input type="text" name="qualification" required>
        </div>

        <!-- Buttons -->
        <div class="buttons-group">
            <button type="button" onclick="prevStep()" class="btn btn-prev">Previous</button>
            <button type="button" onclick="nextStep()" class="btn btn-next">Next</button>
            <button type="submit" name="submit" class="btn btn-submit">Submit</button>
        </div>
    </form>

    <script>
        function nextStep() {
            const currentStep = document.querySelector('.form-step-active');
            const nextStep = currentStep.nextElementSibling;
            currentStep.classList.remove('form-step-active');
            nextStep.classList.add('form-step-active');
        }

        function prevStep() {
            const currentStep = document.querySelector('.form-step-active');
            const prevStep = currentStep.previousElementSibling;
            currentStep.classList.remove('form-step-active');
            prevStep.classList.add('form-step-active');
        }
    </script>
</body>
</html>
