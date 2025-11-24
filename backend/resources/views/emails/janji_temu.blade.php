<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Janji Temu - DigiTamu UPT TIK Unila</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background-color: #F3F4F6;">
    <!-- Outer Wrapper -->
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #F3F4F6;">
        <tr>
            <td style="padding: 40px 20px;">
                <!-- Main Card Container -->
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="max-width: 600px; margin: 0 auto; background-color: #FFFFFF; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background-color: #0c5678; padding: 30px; text-align: center; border-radius: 12px 12px 0 0;">
                            <h1 style="margin: 0; color: #FFFFFF; font-size: 20px; letter-spacing: 1px;">
                                DIGITAMU | UPA TIK UNILA
                            </h1>
                        </td>
                    </tr>

                    <!-- Body Content -->
                    <tr>
                        <td style="padding: 40px 35px;">
                            
                            <!-- Greeting -->
                            <p style="margin: 0 0 10px 0; font-size: 16px; color: #1F2937; font-weight: 600;">
                                Halo, {{ $tamu->nama }}
                            </p>
                            <p style="margin: 0 0 30px 0; font-size: 14px; color: #6B7280; line-height: 1.6;">
                                Terima kasih telah menggunakan layanan DigiTamu. Permohonan janji temu Anda telah berhasil kami terima dan sedang dalam proses verifikasi.
                            </p>

                            <!-- Ticket ID Box -->
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-bottom: 30px;">
                                <tr>
                                    <td style="background-color: #F9FAFB; border: 2px dashed #D1D5DB; border-radius: 8px; padding: 20px; text-align: center;">
                                        <p style="margin: 0 0 8px 0; font-size: 11px; color: #9CA3AF; font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px;">
                                            ID Kunjungan Anda
                                        </p>
                                        <p style="margin: 0; font-size: 24px; color: #000000; font-weight: 700; font-family: 'Courier New', monospace; letter-spacing: 2px;">
                                            {{ strtoupper(substr($kunjungan->id, 0, 8)) }}
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <!-- Detail Section Header -->
                            <h2 style="margin: 0 0 20px 0; font-size: 14px; color: #374151; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; border-left: 4px solid #0EA5E9; padding-left: 12px;">
                                Detail Janji Temu
                            </h2>

                            <!-- Data Grid -->
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-bottom: 25px;">
                                <tr>
                                    <td style="padding: 12px 0; border-bottom: 1px solid #E5E7EB;">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td style="width: 35%; font-size: 13px; color: #6B7280; font-weight: 600;">Nama Lengkap</td>
                                                <td style="font-size: 14px; color: #1F2937;">{{ $tamu->nama }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 0; border-bottom: 1px solid #E5E7EB;">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td style="width: 35%; font-size: 13px; color: #6B7280; font-weight: 600;">Email</td>
                                                <td style="font-size: 14px; color: #1F2937;">{{ $tamu->email }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 0; border-bottom: 1px solid #E5E7EB;">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td style="width: 35%; font-size: 13px; color: #6B7280; font-weight: 600;">Waktu Janji Temu</td>
                                                <td style="font-size: 14px; color: #1F2937;">
                                                    {{ \Carbon\Carbon::parse($kunjungan->waktu_janji_temu)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                                    <br>
                                                    <span style="color: #000000; font-weight: 600;">{{ \Carbon\Carbon::parse($kunjungan->waktu_janji_temu)->format('H:i') }} WIB</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 0; border-bottom: 1px solid #E5E7EB;">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td style="width: 35%; font-size: 13px; color: #6B7280; font-weight: 600;">Status</td>
                                                <td style="font-size: 14px; color: #1F2937;">
                                                    <span style="display: inline-block; background-color: #FEF3C7; color: #D97706; padding: 4px 12px; border-radius: 99px; font-size: 12px; font-weight: 600;">
                                                        Menunggu Konfirmasi
                                                    </span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>


                            <!-- Full Width Section: Topik Diskusi -->
                            <h3 style="margin: 0 0 15px 0; font-size: 13px; color: #374151; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">
                                Topik Diskusi
                            </h3>
                            <div style="background-color: #F9FAFB; border-left: 3px solid #0EA5E9; padding: 16px 20px; border-radius: 6px; margin-bottom: 30px;">
                                <p style="margin: 0; font-size: 14px; color: #4B5563; line-height: 1.7; white-space: pre-wrap;">{{ $kunjungan->keperluan }}</p>
                            </div>

                            <!-- Call to Action Button -->
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-bottom: 30px;">
                                <tr>
                                    <td style="text-align: center;">
                                        <a href="http://localhost:5173" style="display: inline-block; background-color: #0c5678; color: #FFFFFF; text-decoration: none; padding: 14px 32px; border-radius: 8px; font-size: 14px; font-weight: 600; letter-spacing: 0.3px;">
                                            Lihat Status Kunjungan
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            <!-- Important Note -->
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td style="background-color: #EFF6FF; border-left: 3px solid #3B82F6; padding: 16px 20px; border-radius: 6px;">
                                        <p style="margin: 0; font-size: 13px; color: #1E40AF; line-height: 1.6;">
                                            <strong>Catatan Penting:</strong> Simpan email ini sebagai bukti pendaftaran. Tim kami akan menghubungi Anda melalui email untuk konfirmasi jadwal.
                                        </p>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #F9FAFB; padding: 30px 35px; border-top: 1px solid #E5E7EB; border-radius: 0 0 12px 12px;">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td style="text-align: center;">
                                        <p style="margin: 0 0 8px 0; font-size: 14px; color: #1F2937; font-weight: 600;">
                                            UPA TIK Universitas Lampung
                                        </p>
                                        <p style="margin: 0 0 12px 0; font-size: 13px; color: #6B7280; line-height: 1.6;">
                                            Gedung TIK, Jl. Prof. Dr. Ir. Sumantri Brojonegoro No.1<br>
                                            Gedong Meneng, Bandar Lampung 35145
                                        </p>
                                        <p style="margin: 0 0 12px 0; font-size: 13px; color: #6B7280;">
                                            Email: <a href="mailto:helpdesk@tik.unila.ac.id" style="color: #0EA5E9; text-decoration: none;">helpdesk@tik.unila.ac.id</a> | Telp: (0721) 701609
                                        </p>
                                        <p style="margin: 0; font-size: 11px; color: #9CA3AF; font-style: italic;">
                                            Mohon jangan membalas email ini. Email ini dikirim secara otomatis oleh sistem.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
