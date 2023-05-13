<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Diabetic Retinopathy Exam Report</title>
    <style>
      /* Reset styles */
      *,
      *::before,
      *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      /* Global styles */
      body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 16px;
        line-height: 1.4;
        color: #333;
        background-color: #f9f9f9;
      }
      .text-center{
        text-align: center;
      }
      .border{
        margin-top: 25px;
        border: 1px solid #ddd;
        padding: 10px;
      }
      
      /* Container styles */
      .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }
      
      /* place img in the right of h1 */
      img {
        float: left;
        width: 100px;
        height: 100px;
      }

      /* Typography styles */
      h1, h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #2c3e50;
      }
      
      h1 {
        font-size: 36px;
        font-weight: bold;
        margin-top: 10px;
      }
      h2 {
        font-size: 24px;
        font-weight: bold;
      }
      p {
        margin-bottom: 10px;
      }
      .link {
        color: #2980b9;
      }
      
      /* Table styles */
      table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
      }
      th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }
      th {
        background-color: #f2f2f2;
      }
      
      /* Print styles */
      @media print {
        body {
          font-size: 12pt;
        }
        .container {
          max-width: none;
          padding: 0;
          margin: 0;
        }
      }
    </style>
    <script>
      window.onload = function() { window.print(); }
    </script>
  </head>
  <body>
    <div class="container">
      <img src="{{asset('img/favicon.svg')}}" alt="">
      <h1> Diabetic Retinopathy Exam Report</h1>
      <p class="text-center link">diabetic-retinopathy-detection.com</p>
      <hr>
      <div class="border">
        <h2>Patient Information</h2>
        <table>
          <tr>
            <th>Name</th>
            <td>{{ $examination->patient->name }}</td>
          </tr>
          <tr>
            <th>Age</th>
            <td>{{ $examination->patient->age }}</td>
          </tr>
          <tr>
            <th>Gender</th>
            <td>{{ $examination->patient->gender }}</td>
          </tr>
          <tr>
            <th>Date of Exam</th>
            <td>{{ Carbon\Carbon::parse($examination->created_at)->format('d M Y') }}</td>
          </tr>
        </table>
      </div>
      <div class="border">
        <h2>Exam Results</h2>
        <table>
          <tr>
            <th>Eye</th>
            <th>Retinopathy Grade</th>
          </tr>
          <tr>
            <td>Left</td>
            <td>
              @if ($examination->result == 0)
                Normal
              @elseif ($examination->result == 1)
                Diabetic Retinopathy Mild
              @elseif ($examination->result == 2)
                Diabetic Retinopathy Moderate
              @elseif ($examination->result == 3)
                Diabetic Retinopathy Severe
              @elseif ($examination->result == 4)
                Diabetic Retinopathy Proliferative
              @endif
            </td>
          </tr>
          <tr>
            <td>Right</td>
            <td>
              @if ($examination->result2 == 0)
                Normal
              @elseif ($examination->result2 == 1)
                Diabetic Retinopathy Mild
              @elseif ($examination->result2 == 2)
                Diabetic Retinopathy Moderate
              @elseif ($examination->result2 == 3)
                Diabetic Retinopathy Severe
              @elseif ($examination->result2 == 4)
                Diabetic Retinopathy Proliferative
              @endif
            </td>
          </tr>
        </table>
      </div>
      <div class="border">
        <h2>Additional Notes</h2>
        <table>
          <tr>
            <th>Description</th>
            <td>{{ $examination->description }}</td>
          </tr>
          <tr>
            <th>Action/Suggestion</th>
            <td>{{ $examination->action }}</td>
          </tr>
          <tr>
            <th>Doctor</th>
            <td>{{ $examination->doctor->name }}</td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>