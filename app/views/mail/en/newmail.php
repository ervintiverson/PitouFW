<?php require VIEWS . 'mail/_top.php'; ?>
<table  border="0" cellpadding="0" cellspacing="0"
        style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: separate !important; border-radius: 4px; width: 100%; overflow: hidden; border: 1px solid #dee2e6;"
        bgcolor="#ffffff">
    <tbody>
    <tr>
        <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; width: 100%; margin: 0;"
            align="left">
            <div style="border-top-width: 5px; border-top-color: <?= PRIMARY_COLOR ?>; border-top-style: solid;">
                <table  border="0" cellpadding="0" cellspacing="0"
                        style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: collapse; width: 100%;">
                    <tbody>
                    <tr>
                        <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; width: 100%; margin: 0; padding: 20px;"
                            align="left">
                            <div>
                                <h4 class=""
                                    style="margin-top: 0; margin-bottom: 0; font-weight: 500; color: inherit; vertical-align: baseline; font-size: 24px; line-height: 28.8px;"
                                    align="left">Validate your e-mail address</h4>
                                <table  border="0" cellpadding="0"
                                        cellspacing="0" style="width: 100%;">
                                    <tbody>
                                    <tr>
                                        <td height="16"
                                            style="border-spacing: 0px; border-collapse: collapse; line-height: 16px; font-size: 16px; width: 100%; height: 16px; margin: 0;"
                                            align="left">
                                            ??
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p class=""
                                   style="line-height: 24px; font-size: 14px; margin: 0;"
                                   align="left">
                                    You updated your e-mail address on <?= NAME ?> and we need to validate that address.
                                    Please clock the button below to validate your e-mail address. If the button does
                                    not work or is malfunctioning, copy-paste this link into your browser :
                                    <strong><?= APP_URL ?>user/confirm/<?= $token ?></strong>
                                    <br /><br />
                                    If you do not requested this, please warn us by answering this e-mail.
                                </p>
                                <table  border="0" cellpadding="0"
                                        cellspacing="0" style="width: 100%;">
                                    <tbody>
                                    <tr>
                                        <td height="16"
                                            style="border-spacing: 0px; border-collapse: collapse; line-height: 16px; font-size: 16px; width: 100%; height: 16px; margin: 0;"
                                            align="left">
                                            ??
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>


                                <table  border="0" cellpadding="0"
                                        cellspacing="0" style="width: 100%;">
                                    <tbody>
                                    <tr>
                                        <td height="8"
                                            style="border-spacing: 0px; border-collapse: collapse; line-height: 8px; font-size: 8px; width: 100%; height: 8px; margin: 0;"
                                            align="left">
                                            ??
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table
                                    align="center" border="0" cellpadding="0"
                                    cellspacing="0"
                                    style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: separate !important; border-radius: 4px; margin: 0 auto;">
                                    <tbody>
                                    <tr>
                                        <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; border-radius: 4px; margin: 0;"
                                            align="center" bgcolor="<?= PRIMARY_COLOR ?>">
                                            <a href="<?= APP_URL ?>user/confirm/<?= $token ?>"
                                               style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; text-decoration: none; border-radius: 4.8px; line-height: 30px; display: inline-block; font-weight: normal; white-space: nowrap; background-color: <?= PRIMARY_COLOR ?>; color: #ffffff; padding: 8px 16px; border: 1px solid <?= PRIMARY_COLOR ?>;">Validate my e-mail</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<?php require VIEWS . 'mail/en/_btm.php'; ?>
