<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organic Shape Pattern with Random Movement</title>
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #fff;
        }
        canvas {
            display: block;
            background-color: #fff;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <canvas id="organicCanvas"></canvas>
    <script>
        const canvas = document.getElementById('organicCanvas');
        const ctx = canvas.getContext('2d');

        // Set canvas size
        canvas.width = window.innerWidth * 0.8;
        canvas.height = window.innerHeight * 0.8;

        // Configuration
        const numShapes = 12; // Number of organic shapes to draw
        const shapeColor = '#000'; // Color for the shapes
        const curveOffset = 10; // Curve adjustment to create variability in shapes

        // Store shapes' properties
        let shapes = [];

        // Function to draw an organic shape
        function drawOrganicShape(x, y, size) {
            ctx.beginPath();
            ctx.moveTo(x, y);

            // Create a random set of curves to simulate an organic shape
            for (let i = 0; i < 5; i++) {
                const controlX1 = x + Math.random() * size - size / 2;
                const controlY1 = y + Math.random() * size - size / 2;
                const controlX2 = x + Math.random() * size - size / 2;
                const controlY2 = y + Math.random() * size - size / 2;
                const endX = x + Math.random() * size - size / 2;
                const endY = y + Math.random() * size - size / 2;

                ctx.bezierCurveTo(controlX1, controlY1, controlX2, controlY2, endX, endY);
            }

            ctx.closePath();
            ctx.fillStyle = shapeColor;
            ctx.fill();
        }

        // Function to generate and store multiple organic shapes
        function generateShapes() {
            for (let i = 0; i < numShapes; i++) {
                const x = Math.random() * canvas.width;
                const y = Math.random() * canvas.height;
                const size = Math.random() * 10; // Random size between 30 and 90

                // Store the shape's initial position, size, and movement speed
                shapes.push({
                    x,
                    y,
                    size,
                    dx: Math.random() * 2 - 1, // Random horizontal speed
                    dy: Math.random() * 2 - 1  // Random vertical speed
                });
            }
        }

        // Function to update and animate the movement of shapes
        function animateShapes() {
            ctx.clearRect(0, 0, canvas.width, canvas.height); // Clear the canvas

            // Loop through each shape and update its position
            for (let shape of shapes) {
                shape.x += shape.dx; // Move horizontally
                shape.y += shape.dy; // Move vertically

                // Keep the shapes inside the canvas boundaries
                if (shape.x <= 0 || shape.x >= canvas.width) shape.dx *= -1;
                if (shape.y <= 0 || shape.y >= canvas.height) shape.dy *= -1;

                // Draw the updated shape
                drawOrganicShape(shape.x, shape.y, shape.size);
            }

            requestAnimationFrame(animateShapes); // Call the animation function again
        }

        // Initialize and start the animation
        generateShapes();
        animateShapes();

        // Redraw on resize
        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth * 0.8;
            canvas.height = window.innerHeight * 0.8;
            shapes = []; // Reset the shapes
            generateShapes(); // Generate new shapes
            animateShapes(); // Restart animation
        });
    </script>
</body>
</html>
