<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <style>
        body {
            font-family: DejaVu Sans;
            font-size: 12px;
            color: #333;
            padding: 25px;
        }

        .header {
            border-bottom: 2px solid #3e3e3e;
            margin-bottom: 20px;
            padding-bottom: 12px;
        }

        .header-table {
            width: 100%;
        }

        .header-title {
            font-size: 20px;
            color: #4f5150;
            margin: 0;
        }

        .header small {
            color: #666;
            font-size: 11px;
        }

        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .details-table th {
            width: 35%;
            background: #f4f6f9;
            text-align: left;
            padding: 8px 10px;
            border: 1px solid #dcdcdc;
            font-weight: 600;
        }

        .details-table td {
            width: 65%;
            padding: 8px 10px;
            border: 1px solid #dcdcdc;
        }

        .footer {
            position: fixed;
            bottom: 12px;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 10px;
            color: #888;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div style="text-align: center; margin-bottom: 25px;">
        <img
            src="data:image/webp;base64,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"
            style="height: 140px;"
            alt="Logo"
        >
    </div>

    <!-- Title -->
    <div class="header" style="text-align: center;">
        <h2 class="header-title">Disposal Details</h2>
        <small>Generated on {{ date('d M Y') }}</small>
    </div>

    <!-- Details Table -->
    <table class="details-table">

        <tr>
            <th>IP Address</th>
            <td>{{ $disposal->ip_address ?? '-' }}</td>
        </tr>

        <tr>
            <th>Date of Pickup</th>
            <td>
                {{ $disposal->date_of_pickup
                    ? \Carbon\Carbon::parse($disposal->date_of_pickup)->format('d M Y')
                    : '-' }}
            </td>
        </tr>

        <tr>
            <th>Generator Name</th>
            <td>{{ $disposal->generator_name ?? '-' }}</td>
        </tr>

        <tr>
            <th>Waste Type</th>
            <td>{{ $disposal->waste_type ?? '-' }}</td>
        </tr>

        <tr>
            <th>Address</th>
            <td>{{ $disposal->address ?? '-' }}</td>
        </tr>

        <tr>
            <th>Volume Pumped</th>
            <td>
                {{ $disposal->volume_pumped ?? '-' }}
                {{ $disposal->unit ?? '' }}
            </td>
        </tr>

        <tr>
            <th>ZIP Code</th>
            <td>{{ $disposal->zip ?? '-' }}</td>
        </tr>

        <tr>
            <th>Date of Discharge</th>
            <td>
                {{ $disposal->date_of_discharge
                    ? \Carbon\Carbon::parse($disposal->date_of_discharge)->format('d M Y')
                    : '-' }}
            </td>
        </tr>

        <tr>
            <th>Discharge Site</th>
            <td>{{ $disposal->discharge_site ?? '-' }}</td>
        </tr>

        <tr>
            <th>Transporter Name</th>
            <td>{{ $disposal->transporter_name ?? '-' }}</td>
        </tr>

        <tr>
            <th>Vehicle License Number</th>
            <td>{{ $disposal->vehicle_license_number ?? '-' }}</td>
        </tr>

    </table>

    <!-- Footer -->
    <div class="footer">
        This is a system-generated document. No signature required.
    </div>



    
</body>
</html>
