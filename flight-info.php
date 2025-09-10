<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<style>
    .img-fluid {
        width: 100%;
        height: 250px;
        object-fit: cover;
        object-position: center 66%;
        filter: brightness(50%);
    }

    .blue-box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 82, 170, 0.7);
        color: white;
        padding: 10px 20px;
        font-size: clamp(24px, 5vw, 40px);
        text-align: center;
        white-space: nowrap;
        border-radius: 8px;
        box-shadow: var(--box-shadow);
        animation: fadeInBox 1.5s ease-out forwards;
        opacity: 0;
    }

    @keyframes fadeInBox {
        from {
            opacity: 0;
            transform: translate(-50%, -60%) scale(0.95);
        }

        to {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }
    }

     .image-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        max-height: 250px;
        box-shadow: var(--box-shadow);
    }
    
    .flight-container {
        max-width: 1500px;
        margin: 0 auto;
        padding: 40px 20px 20px 20px;
    }

    .flight-header h1 {
        font-size: 26px;
        position: relative;
        padding-left: 20px;
    }

    .flight-header .highlight-bar {
        position: absolute;
        width: 4px;
        height: 20px;
        background-color: #f4c900;
        left: 0;
        top: 5px;
    }
    .flight-header  {
        display: flex;
        justify-content: space-between; 
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .flight-header .home {
        display: flex; 
        align-items: center;
    }

    .flight-header .home a {
        text-decoration: none;
        font-size: 16px;
        margin-right: 5px;
    }


    .flight-table-header {
        background-color: #011640;
        width: 100%;
        height:70px;
    }
    .flight-table-departures {
        background: linear-gradient(to top,rgb(5, 70, 26) 0%,rgb(14, 177, 28) 80%);
        max-width: 100%;
        height: 50px;
    }
    .flight-table-departures {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 50px;
    }
    .flight-table-departures h1 {
        font-size: 34px;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
    }
    .flight-table-departures h1 .fa-plane-departure {
        margin-left: 10px;
        font-size: 25px;
    }

    .flight-table {
        background-color: #002060;
        font-size: 16px;
        border-collapse: collapse;
        max-width: 100%;
        table-layout: fixed;
    }

    .flight-table th {
        background: linear-gradient(to top, rgb(177, 177, 177) 10%, rgb(255, 255, 255) 60%);
        color: rgb(139, 139, 139);
        text-align: center;
        vertical-align: middle;
    }

    .flight-table td {
        background-color: #011640;
        text-align: center;
        vertical-align: middle;
        color: white;
        padding: 5px 5px;
        font-size: 30px;
    }

    .status-departed {
        color:rgba(230, 183, 42, 0.74) !important;
    }

    .status-boarding,
    .status-checkin {
        color:rgba(18, 190, 58, 0.7) !important;
    }

    .status-cancelled {
        color:rgba(197, 16, 34, 0.75) !important;
    }

    .table-wrapper {
        max-width: 100%;
        background-color: #002060;
        padding: 0 5px; 
    }
    .flight-table, 
    .flight-table th, 
    .flight-table td {
        border-color:rgb(45, 55, 77);
    }
    .flight-table tbody tr:nth-child(odd) td {
        background-color:rgb(0, 14, 44) !important; /* น้ำเงินเข้ม */
    }

    .flight-table tbody tr:nth-child(even) td {
        background-color: #011640 !important; /* น้ำเงินอ่อน */
    }
    .flight-table-header .airport-center {
        position: relative;
        display: flex;
        align-items: center;
        height: 100%;
    }
    .flight-table-header .airport-center img {
        height: 50px;
        width: 50px;
        margin-right: 10px;
        margin-left: 5px;
    }
    .flight-table-header .airport-name .thai-name {
        font-size: 20px;
        font-weight: bold;
    }

    .flight-table-header .airport-name .english-name {
        font-size: 15px;
    }
    .flight-table-header .airport-name .thai-name,
    .flight-table-header .airport-name .english-name {
        color: white;
    }

    .flight-table-header .time-container {
        padding: 0 10px;
        background: linear-gradient(to top, rgb(34, 34, 34) 0%, rgb(122, 122, 122) 25%, rgb(34, 34, 34) 50%, rgb(156, 156, 156) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        border-right: 1px solid black;
        font-weight: bold;
        font-size: 16px;
        height: 60%;
        max-width: 325px;
        margin-left: auto;
        border-radius: 6px;
        text-align: center;
    }
    .flight-table-header .time-container .date-box {
        display:flex; 
        align-items:center; 
        justify-content:center; 
        width:100%;
        color: white;
    }
    .flight-table-header .time-container .date-box i {
        font-size:22px; 
        margin-right:5px;
    }

    .flight-table th.th-to,
.flight-table td:nth-child(2),
.flight-table th.th-status,
.flight-table td:nth-child(6) {
    text-align: left;
    padding-left: 10px;
}
.airline-logo {
    width: auto;
    height: 45px;
    margin: 5px auto;
}
.flight-table th:nth-child(1),
.flight-table td:nth-child(1) {
    width: 10%;
}

/* คอลัมน์ที่ 2: ถึง (ปลายทาง) */
.flight-table th:nth-child(2),
.flight-table td:nth-child(2) {
    width: 25%;
}

/* คอลัมน์ที่ 3: สายการบิน */
.flight-table th:nth-child(3),
.flight-table td:nth-child(3) {
    width: 20%;
}

/* คอลัมน์ที่ 4: เที่ยวบิน */
.flight-table th:nth-child(4),
.flight-table td:nth-child(4) {
    width: 15%;
}

/* คอลัมน์ที่ 5: ประตู */
.flight-table th:nth-child(5),
.flight-table td:nth-child(5) {
    width: 10%;
}

/* คอลัมน์ที่ 6: หมายเหตุ (สถานะ) */
.flight-table th:nth-child(6),
.flight-table td:nth-child(6) {
    width: 20%;
}
.date-part {
  color: #ffffff; /* สีของวันที่ */
}

.time-part {
    color: rgb(255, 228, 107);
    font-weight: bold;
    animation: color-swap 1s infinite;
}   
.time-word {
    color:rgb(39, 212, 255) ;
}
.date-box p {
    margin:0;
    font-size: 16px;
}
.divider {
    width: 3px;
    height: 42px;
    background: linear-gradient(to right, rgb(0, 0, 0) 40%, rgb(255, 255, 255) 100%);
    margin: 0 10px;
    opacity: 0.60;
}
.flight-table td:nth-child(2) {
    color:rgba(255, 255, 255, 0.52);
}
.flight-table td:nth-child(5) {
    color:rgb(255, 255, 255, 0.52);
}
.eng-overlay {
        position: absolute;
        top: 11%;
        color: rgba(177, 177, 177, 0.1);
        font-size: 32px;
        z-index: 1 ;
        user-select: none;
        pointer-events: none;
        }
    .flight-table-header,
.flight-table-departures {
    min-width: 600px; /* This should match the min-width of .flight-table in mobile */
}
@media (max-width: 1184px) {
    .eng-overlay {
        top: 26%;
    }
}
@media (min-width: 768px) and (max-width: 991px) {
    .flight-table-header,
    .flight-table-departures {
        min-width: 700px; /* This should match the min-width of .flight-table for tablets */
    }
}
    @media (max-width: 956px) {
    .flight-container {
        padding: 20px 10px 10px 10px;
    }
    .eng-overlay {
        top: 100%;
    }

    .flight-header h1 {
        font-size: 20px;
    }
    .flight-header .highlight-bar {
        top: 3px;
    }

    .flight-header .home {
        font-size: 14px;
    }

    /* ทำให้ภาพ header สูงน้อยลงและปรับ object-position */
    .img-fluid {
        height: 150px;
        object-position: center 50%;
    }

    /* ตารางให้เลื่อนซ้ายขวาได้ */
    .table-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        padding-bottom: 10px;
    }

    .flight-table {
        min-width: 600px; /* กำหนดความกว้างขั้นต่ำเพื่อเลื่อน */
        font-size: 14px;
    }

    .flight-table th, .flight-table td {
        font-size: 14px;
        padding: 4px 6px;
    }

    /* โลโก้สายการบินเล็กลง */
    .airline-logo {
        height: 30px;
        margin: 2px auto;
    }

    /* กล่อง blue-box ตัวหนังสือเล็กลง */
    .blue-box {
        font-size: 20px;
        padding: 6px 12px;
    }

    /* วันที่และเวลาใน header เล็กลง */
    .flight-table-header .airport-name .thai-name {
        font-size: 16px;
    }
    .flight-table-header .airport-name .english-name {
        font-size: 12px;
    }

    .flight-table-header .time-container {
        font-size: 12px;
        max-width: 200px;
    }

    /* ซ้อนภาษาอังกฤษ-ไทยในคอลัมน์ถึง ให้เล็กลง */
    .flight-table td:nth-child(2) {
        font-size: 14px;
    }
    .eng-overlay {
        font-size: 18px;
        top:20%;
    }
}

/* ขยายขึ้นสำหรับ tablet */
    @media (min-width: 768px) and (max-width: 991px) {
        .flight-container {
            padding: 30px 15px 15px 15px;
        }
        .flight-table {
            font-size: 15px;
            min-width: 700px;
        }
        .airline-logo {
            height: 35px;
        }
        .blue-box {
            font-size: 24px;
        }
    }
    @keyframes color-swap {
        0% { color: #ffc107; } /* สีเหลือง */
        50% { color: #ffffff; } /* สีขาว */
        100% { color: #ffc107; } /* กลับไปสีเหลือง */
    }
</style>

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <main>
        <div class="image-container">
          <img src="assets/images/flight-info-header.jpg" class="img-fluid" alt="flight-info Image">
          <div class="blue-box">เที่ยวบิน</div>
        </div>
        <div class="flight-container">
            <div class="flight-header">
                <h1><span class="highlight-bar"></span>เที่ยวบิน</h1>
                <div class="home">
                    <a href="index.php"><i class="bi bi-house-door"></i></a> > เที่ยวบิน
                </div>
            </div>
                
                
                    <div class="table-wrapper">
                        <div class="flight-table-header">
                                <div class="d-flex align-items-center airport-center">
                                    <img src="assets/images/logo-airport.png" alt="logo">
                                    <div class="airport-name">
                                        <div class="thai-name">ท่าอากาศยานอุดรธานี / UDONTHANI AIRPORT</div>
                                        <div class="english-name">Flight infomation</div>
                                    </div>
                                    <div class="time-container">
                                        <div class="date-box">
                                            <i class="bi bi-airplane"></i>
                                            <p id="datetime">
                                                <p id="date"></p>
                                                <div class="divider"></div>
                                                <p id="time"></p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        <table class="table flight-table">
                            <div class="flight-table-departures text-white">
                                <h1>ขาออก / Departures <i _ngcontent-gbm-c54="" class="fas fa-plane-departure"></i></h1>
                            </div>
                            
                            <thead>
                                <tr>
                                    <th class="th-time">เวลา</th>
                                    <th class="th-to">ถึง</th>
                                    <th class="th-airline">สายการบิน</th>
                                    <th class="th-code">เที่ยวบิน</th>
                                    <th class="th-gate">ประตู</th>
                                    <th class="th-status">หมายเหตุ</th>
                                </tr>
                            </thead>
                            <tbody id="flightData"></tbody>
                        </table>
                    </div>
                </div>
        
    </main>
    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</body>

<script>
    const flights = [
    { time: "08:45", to: "สุวรรณภูมิ", airline: "Thai Smile", code: "WE 003", gate: "1", status: "เครื่องออก 08:33" },
    { time: "09:35", to: "ดอนเมือง", airline: "AirAsia", code: "FD 3349", gate: "1", status: "เครื่องออก 09:27" },
    { time: "11:35", to: "สุวรรณภูมิ", airline: "VietJet Air", code: "VZ 209", gate: "1", status: "เครื่องออก 11:38" },
    { time: "13:00", to: "ดอนเมือง", airline: "Nok Air", code: "DD 305", gate: "3", status: "เครื่องออก 13:00" },
    { time: "15:00", to: "สุวรรณภูมิ", airline: "VietJet Air", code: "VZ 205", gate: "1", status: "กำลังเรียกขึ้นเครื่อง" },
    { time: "16:15", to: "ดอนเมือง", airline: "Thai Lion Air", code: "SL 605", gate: "1", status: "เปิด Ck-in" },
    { time: "16:25", to: "ดอนเมือง", airline: "Nok Air", code: "DD 311", gate: "", status: "ยกเลิก" },
    { time: "17:30", to: "สุวรรณภูมิ", airline: "Thai Smile", code: "WE 009", gate: "1", status: "-" }
];

const destinationNames = {
    "ดอนเมือง": "DON MUEANG",
    "สุวรรณภูมิ": "SUVARNABHUMI"
};

const getAirlineIcon = (airline) => {
    switch (airline) {
        case "Thai Smile": return "assets/images/thaismile.png";
        case "AirAsia": return "assets/images/airasia.png";
        case "VietJet Air": return "assets/images/vietjetair.png";
        case "Nok Air": return "assets/images/nokair.png";
        case "Thai Lion Air": return "assets/images/thailionair.png";
        default: return "";
    }
};

const tbody = document.getElementById("flightData");

flights.forEach(f => {
    const tr = document.createElement("tr");

    const statusClass =
        f.status.includes("ยกเลิก") ? "status-cancelled" :
        f.status.includes("เรียก") || f.status.includes("Ck-in") ? "status-boarding" :
        f.status.includes("ออก") ? "status-departed" : "";

    const icon = getAirlineIcon(f.airline);

    // สร้าง div ที่มี position relative สำหรับซ้อนภาษาไทยและอังกฤษ
    const toCell = document.createElement("td");
    toCell.style.position = "relative";
    toCell.style.height = "24px";  // ปรับสูงพอสมควรสำหรับข้อความซ้อนกัน

    // ภาษาไทย (ชั้นบน)
    const thaiSpan = document.createElement("span");
    thaiSpan.textContent = f.to;

    // ภาษาอังกฤษ (ซ้อนใต้ แต่ตำแหน่งเดียวกัน)
    const engSpan = document.createElement("span");
    engSpan.textContent = destinationNames[f.to] || "";
    engSpan.classList.add("eng-overlay");

    toCell.appendChild(engSpan);
    toCell.appendChild(thaiSpan);

    tr.innerHTML = `
        <td>${f.time}</td>
        <td></td> <!-- ช่องนี้จะแทนที่ด้วย toCell -->
        <td><img class="airline-logo" src="${icon}" alt="${f.airline}"></td>
        <td>${f.code}</td>
        <td>${f.gate ? `ประตู ${f.gate}` : ''}</td>
        <td class="${statusClass}">${f.status}</td>
    `;

    // แทนที่ td ช่องที่ 2 ด้วย toCell ที่มี span ซ้อนกัน
    tr.replaceChild(toCell, tr.children[1]);

    tbody.appendChild(tr);
});


    const maxRows = 10;
    const emptyRows = maxRows - flights.length;

    for (let i = 0; i < emptyRows; i++) {
        const emptyTr = document.createElement("tr");
        emptyTr.innerHTML = `
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        `;
        tbody.appendChild(emptyTr);
    }

    function updateDateTime() {
        const now = new Date();
        const thaiMonths = [
            "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.",
            "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."
        ];

        const day = now.getDate();
        const month = thaiMonths[now.getMonth()];
        const year = now.getFullYear() + 543;

        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');

        document.getElementById("date").innerHTML =
            `DATE : <span class="date-part">${day} ${month} ${year}</span>`;
        document.getElementById("time").innerHTML =
            `<span class="time-word">TIME</span> : <span class="time-part">${hours}:${minutes}</span>`;
    }

    updateDateTime();
    setInterval(updateDateTime, 60000);
</script>

</html>