<?php 
        //Data, connection, auth
        
        $soapUrl = "http://demo.mfundsglobal.com/bluelinefinancial/service.smx"; // asmx URL of WSDL
       

        // xml post structure

        $xml_post_string = "<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <Purchase xmlns="http://mfundsglobal.com/">
      <partnerPassword>BLUELINE</partnerPassword>

      <purchaseDetail>

        <PaymentType>Cash</PaymentType>

        <TransactionDateTime>2015-01-27T14:46:34</TransactionDateTime>

        <PurchaseNumber>PO123456780001</PurchaseNumber>

        <PurchaseDescription>MM12345-PO123456789</PurchaseDescription>

        <PurchaseSubtotal>50.00</PurchaseSubtotal>

        <Tax1>1.50</Tax1>

        <Tax2>1.50</Tax2>

        <Tax3>1.50</Tax3>

        <Tax4>1.50</Tax4>

        <Tax5>1.00</Tax5>

        <Tax6>0.50</Tax6>

        <Tax7>0.50</Tax7>

        <Tax8>0.50</Tax8>

        <Tax9>0.50</Tax9>

        <Tax10>1.00</Tax10>

        <GrossTaxAmount>10.00</GrossTaxAmount>

        <GrossDiscountAmount>0</GrossDiscountAmount>

        <GrossAmount>60.00</GrossAmount>

        <PatientName>Pot User</PatientName>

        <RegisterNumber>RN0001</RegisterNumber>

        <RegisterUser>RU00002</RegisterUser>

        <StoreID>1000100</StoreID>

        <KioskID>1000100</KioskID>

        <PatientID>4200003</PatientID>

        <cardTokenID>0</cardTokenID>

        <LineItems>

          <PurchaseLineItem>

            <LineItemProductID>123</LineItemProductID>

            <LineItemDescription>test item</LineItemDescription>

            <Quantity>1</Quantity>

            <LineItemSubtotal>25.00</LineItemSubtotal>

            <LineItemDiscount>0.00</LineItemDiscount>

            <LineItemTotal>25.00</LineItemTotal>

          </PurchaseLineItem>

          <PurchaseLineItem>

            <LineItemProductID>25</LineItemProductID>

            <LineItemDescription>test item 2</LineItemDescription>

            <Quantity>1</Quantity>

            <LineItemSubtotal>25.00</LineItemSubtotal>

            <LineItemDiscount>0</LineItemDiscount>

            <LineItemTotal>25.00</LineItemTotal>

          </PurchaseLineItem>

        </LineItems>

      </purchaseDetail>

      <clientRefId>PO-UAT-00000001</clientRefId>

    </Purchase>

  </soap:Body>

</soap:Envelope>";   // data from the form, e.g. some ID number

           $headers = array(
                        "Content-type: text/xml;charset=\"utf-8\",
                        "Accept: text/xml",
                        "Cache-Control: no-cache",
                        "Pragma: no-cache",
                        "SOAPAction: http://mfundsglobal.com/Purchase", 
                        "Content-length: ".strlen($xml_post_string),
                    ); //SOAPAction: your op URL

            $url = $soapUrl;

            // PHP cURL  for https connection with auth
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            // converting
            $response = curl_exec($ch); 
            curl_close($ch);

            // converting
            $response1 = str_replace("<soap:Body>","",$response);
            $response2 = str_replace("</soap:Body>","",$response1);

            // convertingc to XML
            $parser = simplexml_load_string($response2);
            // user $parser to get your data out of XML response and to display it.
    ?>