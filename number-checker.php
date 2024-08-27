<?php
set_time_limit(0);
/**
 * Code Mail: check existing number
 * Author: Tuber Boy (Masud Rana)
 * Date-Time: 8:32 PM Tuesday, August 27, 2024 (GMT+6)
 **/
 
// supported all countries numbers, so use with country code, like +88xxxxxxxxxx, +1xxxxxxxxxx, +44xxxxxxxxxx
$gpn = "+88017xxxxxx";

$pn = str_replace("+", "", $gpn);

$postFields = "f.req=%5B%5B%5B%22V1UmUe%22%2C%22%5Bnull%2C%5C%22%2B".$pn."%5C%22%2C1%2Cnull%2Cnull%2C1%2C1%2Cnull%2Cnull%2C%5C%22S-2144092181%3A1724767406228744%5C%22%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2C%5Bnull%2C%5C%22mail%5C%22%2Cnull%2Cnull%2C%5C%22https%3A%2F%2Fmail.google.com%2Fmail%2Fmu%2Fmp%2F570%2F%3Flogin%3D1%5C%22%5D%2Cnull%2C%5C%22%5C%22%2C%5C%22BD%5C%22%2C%5Bnull%2Cnull%2C%5C%22S-2144092181%3A1724767406228744%5C%22%2C%5C%22AddSession%5C%22%2C%5C%22https%3A%2F%2Fmail.google.com%2Fmail%2Fmu%2Fmp%2F570%2F%3Flogin%3D1%5C%22%2C%5C%22mail%5C%22%2C%5B%5B%5C%22continue%5C%22%2C%5C%22https%3A%2F%2Fmail.google.com%2Fmail%2Fmu%2Fmp%2F570%2F%3Flogin%3D1%5C%22%5D%2C%5B%5C%22hl%5C%22%2C%5C%22en%5C%22%5D%2C%5B%5C%22service%5C%22%2C%5C%22mail%5C%22%5D%2C%5B%5C%22flowName%5C%22%2C%5C%22GlifWebSignIn%5C%22%5D%2C%5B%5C%22flowEntry%5C%22%2C%5C%22AddSession%5C%22%5D%2C%5B%5C%22dsh%5C%22%2C%5C%22S-2144092181%3A1724767406228744%5C%22%5D%2C%5B%5C%22ddm%5C%22%2C%5C%220%5C%22%5D%5D%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2C%5B%5D%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2C%5B%5D%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2C%5B%5D%5D%2C%5B%5C%22youtube%3A2261%5C%22%2C%5C%22youtube%5C%22%2C1%5D%2Cnull%2Cnull%2C%5Bnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2Cnull%2C0%2C0%2C1%2C%5C%22%5C%22%2Cnull%2Cnull%2C2%2C0%5D%2Cnull%2C7%2Cnull%2C%5B%5B%5C%22identity-signin-identifier%5C%22%2C%5C%22!lpWllc3NAAYYN72bODdCiTrzdgH5mpo7ADQBEArZ1E1-Fm9DhTrb_KZmaeZWKSF7reOEwiGQlYKPPf5v0zNDBL7DdkTn4VHmfUvBtb1zAgAAAJdSAAAAUmgBB34ARLwkLqFzgh6EXdKsY0ywQKLwtevKpDg2oWkf_WKAgfq-LvIdA_NNePK2QDGt2tgW2-IFTeX-3lMJ6B70d07ER7mHBQoGmQXecUuHybVF3yLf8zc6X1Voh-lANobW74WcC9wF4tmUT_LzGDDW_eZn1uJAPjh6zj19ZESn5LMbuQ6uH_a7iZOHq1coaxYDcB4ZuhUZ-5hXxj-IlI6PNAryEYL4bKOuLiTU7PHDgoNElnjz-48YD4ZoE1SpzrhtjkgqfFhYTCk3fP8lrVg0NGOI2uPJd2w8PeRYctYAcVq4pAP_tbjECFLPgddkHAF8qo3solRNbCc5AQqScgjJsPGdcoKPsfP-smm4ldQGntBOyC0VIo47C9uyTmfuVJhNiIMbCpaiW2AbBnJnYHk72VorLPtMUsBgvAoXGrXzUqKTP5xcpTpUlX8crgqQfmulu8EQt_3_0iKyKWsA6oxqZkP_ZaqvNwbR7MCf-6C6aOCjMK7sRfypwqeir1paEzt1KYP4EOG3iXYxDjoveqnYG59pE8Lhdm0fbxsMr7zJQyKsOrVk42VuvqR566UEMubhopFIsLYJJROKnTbckUEWhACl5-7uODLWedLAax8uXPWHgm-am0P91QarfUa5nkGMuhaTOl2fgh3cSK_ep2SC6qBes4t9M4JR9NlnzweScBNct9_3_mD49IIR-5nuQrsNYKhZXL1CWrurDg3h1gJ6EHyjs9BiQCPStdzmgYHl-EjqoBV30lLtTozR1hDNDpSBQ61tnzTSMgrD1b77GRDD3wawTcCwir_cXKAOFJ1uZQmZVblO7nYqQVRVSropfM2xt8V2t6rMZtOJcqauDau260ZpTs6lbKL2pWe7HPWXy7la-1GhReohmYhf8sPRo07c1J1BXaCOF2LF5rI6Eff0_2VjutQqXXs_uS76zGRNU3n6YdHtNwJFgn8pAKv382ecWo4rEMiQZE5VkzzttSNjuJun1h3_JVTqe1CZhGDqew3LQSDYfvIX4s_JISvKQGpnrEsi3t0vX3w1REve5qK0meHAyiYQIl6gOrLBV3YFCG_at0DuxlDLZCAARvUo2MPT3x09pDmfmM73lPgaFS8FI_SBlo8A8i286Q_O6mWqCmieIO1ahCCDDVaBcw_CiHmVHLVC5eXIr926tYKkfpKJzIZeqJDPUOB3ExvIneB5SQ35JQHTtl6fKNdL6c3NRhzXrRUL3fdn1X20cBIej5uQGm1AmPnMvAmqr_obzVnB596uB86PpFYFzNw0x6KulT1imQXJG5I_GanFeefVzxKOPT7zn0Kq-Zjl6klSitc9Yex5h9imlNu1bZQDNW6Pl71UBZ7bX0lW_qeTMFeV1P4pHf6bYCMsgoBh8tZJ-mxXZzbnK3ozB8hAb8PUtOyfUE_iEfWQGQmxnvz6txzxTVY2tYTQW454XmWs6xa_7hmi9t_ItMzej-U4EpRjW2CKmMOw2UI_9Rh8SrW2DAqSB9tguUeilWWlTcDDPTRh3yKFLl1GR_rv9njSDJ4dN7fKtPz_1aIFO6B_QMaTGfGzwO5holWuLzjer0AgHVCXcaWom-L5mMnE4oXNTAtxaw2cdi8AYmZWNeJEQufMPWZW5Y2NgVcaBiuG9iSUwZ3F2fHpi5F1FlAONIk4_2mRNmSzp3Yga6-qVv4gWkCK1x8phxGnHvLNbxGNpmw-rMjFWXaiFUcrk0shIDLAC0jiznbsxz33fF2SQrDiVIwTiKeICu2jvKGhMWerfwCdhfUUd55Q3FY74Tha57BO7XdZBR-rsBHX6nzJTl7wk_Tf0wgQfK-14C5X8TSpQq2RgFQZA3uZWnAFRO7mVexH4q3e-avl9jO_n_ecp4GlqPIo3ZBE3i4I1tpqmqVGdl-3kdhuzC4Dvr2VN7ICq7qWBeDzaN5--u-tdRJAGGeFmeiSs3AB8D7v0eVdLiG8Ti1kh2u2a9dxJm1kitKeCGchQ3x-o1zNHcxXJ9XZUlP1lykyd9uKIA8p7dg1V2-aJVd7ADHHfeEsd1zSpwQ94rDxe9FXwVHVfOpofraotL-hDrvsUFfw1f_I2xVTFIxPGs0t-90-eim0BOeofyPneuKmmpw%5C%22%5D%5D%2C%5Bnull%2Cnull%2Cnull%2Cnull%2Cnull%2C%5Bnull%2C%5B%5B%5C%22continue%5C%22%2C%5B%5C%22https%3A%2F%2Fmail.google.com%2Fmail%2Fmu%2Fmp%2F570%2F%3Flogin%3D1%5C%22%5D%5D%2C%5B%5C%22hl%5C%22%2C%5B%5C%22en%5C%22%5D%5D%2C%5B%5C%22service%5C%22%2C%5B%5C%22mail%5C%22%5D%5D%2C%5B%5C%22flowName%5C%22%2C%5B%5C%22GlifWebSignIn%5C%22%5D%5D%2C%5B%5C%22flowEntry%5C%22%2C%5B%5C%22AddSession%5C%22%5D%5D%2C%5B%5C%22dsh%5C%22%2C%5B%5C%22S-2144092181%3A1724767406228744%5C%22%5D%5D%2C%5B%5C%22ddm%5C%22%2C%5B%5C%220%5C%22%5D%5D%5D%2C%5C%22https%3A%2F%2Fmail.google.com%2Fmail%2Fmu%2Fmp%2F570%2F%3Flogin%3D1%5C%22%5D%2Cnull%2C%5C%22S-2144092181%3A1724767406228744%5C%22%2Cnull%2Cnull%2C%5B%5D%5D%5D%22%2Cnull%2C%22generic%22%5D%5D%5D&at=AH2kdyd7OXVnUP91qe7dz_-C_tiM%3A1724767406548&";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://accounts.google.com/v3/signin/_/AccountsSignInUi/data/batchexecute?rpcids=V1UmUe&source-path=%2Fv3%2Fsignin%2Fidentifier&f.sid=7625600937425224185&bl=boq_identityfrontendauthuiserver_20240819.01_p1&hl=en&_reqid=372213&rt=c");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2_0);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/x-www-form-urlencoded;charset=utf-8',
    'Accept: */*',
    'Accept-Language: en-US,en;q=0.9',
    'X-Same-Domain: 1',
    'Origin: https://accounts.google.com',
    'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 15_8_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6.6 Mobile/15E148 Safari/604.1',
    'Referer: https://accounts.google.com/',
    'Content-Length: 4540', // Ensure this matches the length of $postFields
    'X-Goog-Ext-278367001-Jspb: ["GlifWebSignIn"]',
    'X-Goog-Ext-391502476-Jspb: ["S-2144092181:1724767406228744","mail"]',
    'Cookie: __Host-GAPS=1:2xp1qFUBwsxnJXU-BWAHUXT3Vi4xoXGR2mRNNNRqY7iSYmR_Nw6GxmsXou5ru9flT9gH0m8utjJyFZBtDOkRnR82onNYmNpV-MUdFLy5CIqceH6bEWE9K93v9G6TFIoPTa3QfHByklODm6WDwEK_feNyfXBfmA:SevonW0Le2IPKVMc'
]);
$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    $res = str_replace("\\", "", urldecode($response));
	if (strpos($res, $pn) !== false) {
		echo "This number `".$pn."` have gmail account!";
	} else {
		echo "This number `+".$pn."` have not gmail account!";
	}
}
curl_close($ch);
?>
