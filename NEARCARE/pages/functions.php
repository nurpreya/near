<?php
// functions.php

function getHospitalData($hospitalName, $conn) {
    $hospitalData = array();

    if ($hospitalName !== null) {
        $sql = "SELECT hospitals.hospital_name, hospitals.bed_availability, hospitals.bed_cost, hospitals.hospital_location, hospitals.hospital_address, hospitals.hospital_image
                FROM hospitals
                WHERE hospitals.hospital_name = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $hospitalName);
        $stmt->execute();
        $result = $stmt->get_result();

        $hospitalData = $result->fetch_assoc();

        $stmt->close();
    }

    return $hospitalData;
}
?>
