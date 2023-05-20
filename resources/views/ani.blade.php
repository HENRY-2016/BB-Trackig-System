<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
body
{
    max-width: 500px;
    margin: auto;
    margin-top:30px;
    background-color:#00001a;
}
canvas {
    border:8px solid green;
    background-color: #f1f1f1;
    position: center;
}

</style>
</head>

<body onload="startGame()" >

<br><br>
<canvas id="titleCanvas" width="430" height="130">
</div>
<script>

var mapMarker;

function startGame() {
    // mapMarker = new component(35, 35, "#00cc00", 100, 150);
    mapMarker = new component(35, 35, "{{$statusColor}}", 100, 150);
    mapMakerArea.start();
}

var mapMakerArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 430;
        this.canvas.height = 270;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.frameNo = 0;
        this.interval = setInterval(updateGameArea, 20);
    },
    stop : function() {clearInterval(this.interval);},    
    clear : function() {this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);}}

function component(width, height, color, x, y, type) {

    this.type = type;
    this.width = width;
    this.height = height;
    this.speed = 1;
    this.angle = 0;
    this.moveAngle = 1;
    this.x = x;
    this.y = y;    
    this.update = function() {
        
        ctx = mapMakerArea.context;
        ctx.save();
        ctx.translate(this.x, this.y);
        ctx.rotate(this.angle);
        ctx.fillStyle = color;
        ctx.fillRect(this.width / -2, this.height / -2, this.width, this.height);        
        ctx.restore();    
    }
    this.newPos = function() {
        this.angle += this.moveAngle * Math.PI / 180;
        this.x += this.speed * Math.sin(this.angle);
        this.y -= this.speed * Math.cos(this.angle);
    }
}

function updateGameArea() {
    mapMakerArea.clear();
    mapMarker.newPos();
    mapMarker.update();
}

var titleCanvas = document.getElementById("titleCanvas");
var ctx = titleCanvas.getContext("2d");
ctx.font = "35px Arial";
// ctx.fillStyle = "red";
ctx.fillStyle ="{{$statusColor}}";
ctx.fillText("Asset Plate : {{$data->Name}}",10,50);
ctx.fillText("{{$data->Holder3}} In {{ $data->Holder5}}",20,110);

</script>
</body>
</html>
