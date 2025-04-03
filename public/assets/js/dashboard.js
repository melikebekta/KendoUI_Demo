document.addEventListener('DOMContentLoaded', function() {
    // Import jQuery (if not already included) or ensure it's globally available
    // For example, if using a CDN:
    // <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    // Gelir grafiği
    $("#revenue-chart").kendoChart({
        title: {
            text: "Aylık Gelir"
        },
        legend: {
            position: "bottom"
        },
        seriesDefaults: {
            type: "line",
            style: "smooth"
        },
        series: [{
            name: "Gelir",
            data: [4000, 3000, 5000, 4500, 6000, 5500, 7000, 8000, 7500, 9000, 8500, 10000],
            color: "#4299e1"
        }],
        valueAxis: {
            labels: {
                format: "₺{0}"
            },
            title: {
                text: "Gelir (₺)"
            }
        },
        categoryAxis: {
            categories: ["Oca", "Şub", "Mar", "Nis", "May", "Haz", "Tem", "Ağu", "Eyl", "Eki", "Kas", "Ara"],
            title: {
                text: "Ay"
            }
        },
        tooltip: {
            visible: true,
            format: "₺{0}",
            template: "#= series.name #: #= value #₺"
        }
    });

    // Kullanıcı dağılımı grafiği
    $("#user-chart").kendoChart({
        title: {
            text: "Kullanıcı Dağılımı"
        },
        legend: {
            position: "bottom"
        },
        seriesDefaults: {
            type: "pie"
        },
        series: [{
            data: [
                { category: "Admin", value: 25, color: "#4299e1" },
                { category: "Yönetici", value: 35, color: "#48bb78" },
                { category: "Kullanıcı", value: 40, color: "#ed8936" }
            ]
        }],
        tooltip: {
            visible: true,
            template: "#= category #: #= value #%"
        }
    });

    // Aylık satışlar grafiği
    $("#sales-chart").kendoChart({
        title: {
            text: "Aylık Satışlar"
        },
        legend: {
            position: "bottom"
        },
        seriesDefaults: {
            type: "column"
        },
        series: [{
            name: "Satışlar",
            data: [4000, 3000, 5000, 4500, 6000, 5500],
            color: "#48bb78"
        }],
        valueAxis: {
            labels: {
                format: "₺{0}"
            },
            title: {
                text: "Satış (₺)"
            }
        },
        categoryAxis: {
            categories: ["Oca", "Şub", "Mar", "Nis", "May", "Haz"],
            title: {
                text: "Ay"
            }
        },
        tooltip: {
            visible: true,
            format: "₺{0}",
            template: "#= series.name #: #= value #₺"
        }
    });
});