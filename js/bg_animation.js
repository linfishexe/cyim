const canvas                = document.getElementById("animation_bg");
const context               = canvas.getContext("2d");
const shapes                = [];
const bgColor               = '#22222d';
const triangle_color        = "#fc88df";
const circleColor           = "#a6e7ff";
const rectColor             = "#fff2a6";
const triangle_rendom_range = [30, 5];
const circle_rendom_range   = [30, 5];
const rect_rendom_range     = [0, 40];
const sharps_amount         = 10;
const speed                 = 0.5;

function resizeCanvas() {

    canvas.width = document.body.clientWidth;

    canvas.height = document.body.clientHeight;

}

function Triangle(x, y, dx, dy, color, size) {
    this.x = x;
    this.y = y;
    this.dx = dx;
    this.dy = dy;
    this.color = color;
    this.size = size;
    this.angle = 0;

    this.draw = function() {
        context.beginPath();
        context.moveTo(this.x, this.y);
        context.lineTo(this.x + this.size, this.y + this.size * 2);
        context.lineTo(this.x - this.size, this.y + this.size * 2);
        context.closePath();

        context.shadowBlur = size;
        context.shadowColor = this.color;

        context.lineWidth = size * 0.5;
        context.lineJoin = "round";
        context.strokeStyle = this.color;
        context.stroke();
        context.fillStyle = this.color;
        // context.fill();
    };

    this.update = function() {
    this.x += this.dx;
    this.y += this.dy;
    this.angle += 0.1;

    if (this.x + this.size >= canvas.width || this.x - this.size <= 0) {
        this.dx = -this.dx;
    }

    if (this.y + this.size * 2 >= canvas.height || this.y <= 0) {
        this.dy = -this.dy;
    }

    this.draw();
    };
}

function Circle(x, y, dx, dy, radius, color) {
    this.x = x;
    this.y = y;
    this.dx = dx;
    this.dy = dy;
    this.radius = radius;
    this.color = color;

    this.draw = function() {
        context.beginPath();
        context.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
        context.closePath();

        context.shadowBlur = radius;
        context.shadowColor = this.color;

        context.lineWidth = radius * 0.5;
        context.strokeStyle = this.color;
        context.stroke();
        context.fillStyle = this.color;
        // context.fill();
    };

    this.update = function() {
        this.x += this.dx;
        this.y += this.dy;

        if (this.x + this.radius >= canvas.width || this.x - this.radius <= 0) {
            this.dx = -this.dx;
        }

        if (this.y + this.radius >= canvas.height || this.y - this.radius <= 0) {
            this.dy = -this.dy;
        }

        this.draw();
    };
}

function Rect(x, y, dx, dy, width, height, size, color) {

    this.x = x;
    this.y = y;
    this.dx = dx;
    this.dy = dy;
    this.width = width;
    this.height = height;
    this.size = size;
    this.color = color;

    this.draw = function() {

        context.beginPath();
        context.moveTo(this.x, this.y);
        context.lineTo(this.x + this.width, this.y);
        context.quadraticCurveTo(this.x + this.width, this.y, this.x + this.width, this.y);
        context.lineTo(this.x + this.width, this.y + this.height);
        context.quadraticCurveTo(this.x + this.width, this.y + this.height, this.x + this.width, this.y + this.height);
        context.lineTo(this.x, this.y + this.height);
        context.quadraticCurveTo(this.x, this.y + this.height, this.x, this.y + this.height);
        context.lineTo(this.x, this.y);
        context.quadraticCurveTo(this.x, this.y, this.x, this.y);
        context.closePath();

        context.shadowBlur = this.size;
        context.shadowColor = this.color;

        context.lineWidth = this.size * 0.5;
        context.strokeStyle = this.color;
        context.stroke();
        context.fillStyle = this.color;
        // context.fill();

    };

    this.update = function() {

        this.x += this.dx;
        this.y += this.dy;

        if (this.x + this.width >= canvas.width || this.x <= 0) {
            this.dx = -this.dx;
        }

        if (this.y + this.height >= canvas.height || this.y <= 0) {
            this.dy = -this.dy;
        }

        this.draw();
        
    };

}

function bg_animate() {

    requestAnimationFrame(bg_animate);

    context.clearRect(0, 0, canvas.width, canvas.height);

    for (let i = 0; i < shapes.length; i++) { shapes[i].update(); }

}

window.addEventListener("resize", resizeCanvas);

resizeCanvas();

canvas.style.backgroundColor = bgColor;


for (let i = 0; i < sharps_amount; i++) {

    const triangleSize = Math.random() * triangle_rendom_range[0] + triangle_rendom_range[1];

    const triangleX = Math.random() * (canvas.width  - triangleSize * 2) + triangleSize;
    const triangleY = Math.random() * (canvas.height - triangleSize * 2) + triangleSize;
    const triangleDx = (Math.random() - 0.5) * speed;
    const triangleDy = (Math.random() - 0.5) * speed;



    shapes.push(new Triangle(triangleX, triangleY, triangleDx, triangleDy, triangle_color, triangleSize));

    const circleSize = Math.random() * circle_rendom_range[0] + circle_rendom_range[1];
    const circleX = Math.random() * (canvas.width  - circleSize * 2) + circleSize;
    const circleY = Math.random() * (canvas.height - circleSize * 2) + circleSize;
    const circleDx = (Math.random() - 0.5) * speed;
    const circleDy = (Math.random() - 0.5) * speed;

    shapes.push(new Circle(circleX, circleY, circleDx, circleDy, circleSize, circleColor));



    const rectWidth = Math.random() * rect_rendom_range[0] + rect_rendom_range[1];
    const rectHeight = Math.random() * rect_rendom_range[0] + rect_rendom_range[1];
    const rectX = Math.random() * (canvas.width  - rectWidth) + rectWidth;
    const rectY = Math.random() * (canvas.height - rectHeight) + rectHeight;
    const rectDx = (Math.random() - 0.5) * speed;
    const rectDy = (Math.random() - 0.5) * speed;
    const rectSize = Math.min(rectWidth, rectHeight) / 2;

    shapes.push(new Rect(rectX, rectY, rectDx, rectDy, rectWidth, rectHeight, rectSize, rectColor));

}

function resizeCanvas() {
    canvas.width = document.body.clientWidth;
    canvas.height = document.body.clientHeight;
}

canvas.style.backgroundColor = bgColor;
canvas.style.position = 'fixed';
canvas.style.top = 0;
canvas.style.left = 0;
canvas.style.zIndex = 0;

window.addEventListener("resize", resizeCanvas);
resizeCanvas();

bg_animate();