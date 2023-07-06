<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <style>
        .calculator {
            width: 200px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .calculator input {
            width: 100%;
            margin-bottom: 10px;
            padding: 5px;
        }

        .calculator .row {
            display: flex;
        }

        .calculator .row button {
            flex: 1;
            margin: 2px;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .calculator .row button.operator {
            background-color: #ff9800;
            color: white;
        }

        .calculator .row button.clear {
            background-color: #f44336;
            color: white;
        }

        .calculator .row button.equal {
            background-color: #4caf50;
            color: white;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <input type="text" id="result" readonly>
        <div class="row">
            <button onclick="addToResult(7)">7</button>
            <button onclick="addToResult(8)">8</button>
            <button onclick="addToResult(9)">9</button>
            <button onclick="addToResult('/')">/</button>
        </div>
        <div class="row">
            <button onclick="addToResult(4)">4</button>
            <button onclick="addToResult(5)">5</button>
            <button onclick="addToResult(6)">6</button>
            <button onclick="addToResult('*')">*</button>
        </div>
        <div class="row">
            <button onclick="addToResult(1)">1</button>
            <button onclick="addToResult(2)">2</button>
            <button onclick="addToResult(3)">3</button>
            <button onclick="addToResult('-')">-</button>
        </div>
        <div class="row">
            <button onclick="addToResult(0)">0</button>
            <button onclick="addToResult('.')">.</button>
            <button onclick="calculate()">=</button>
            <button onclick="addToResult('+')">+</button>
        </div>
        <div class="row">
            <button onclick="clearResult()" class="clear">Clear</button>
        </div>
    </div>

    <script>
        function addToResult(value) {
            document.getElementById("result").value += value;
        }

        function calculate() {
            try {
                const result = eval(document.getElementById("result").value);
                document.getElementById("result").value = result;
            } catch (error) {
                document.getElementById("result").value = "Error";
            }
        }

        function clearResult() {
            document.getElementById("result").value = "";
        }
    </script>
</body>
</html>
