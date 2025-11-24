import logoUnila from '../assets/logo_unila.png';
import logoUpatik from '../assets/logo_upatik.png';

export default function GuestLayout({ children }) {
    return (
        <div className="flex flex-col min-h-screen">
            {/* Header */}
            <header className="bg-[#0EA5E9]">
                <div className="w-full px-8 py-0">
                    <div className="flex justify-between items-center">
                        {/* Left: Unila Logo */}
                        <div className="flex items-center">
                            <img src={logoUnila} alt="Logo Unila" className="h-12" />
                        </div>

                        {/* Right: UPA TIK Logo */}
                        <div className="flex items-center">
                            <img src={logoUpatik} alt="Logo UPA TIK" className="h-28 w-36" />
                        </div>
                    </div>
                </div>
            </header>

            {/* Main Content */}
            <main className="grow bg-gray-50">
                <div className="w-full max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    {children}
                </div>
            </main>

            {/* Footer */}
            <footer className="bg-[#1F2937] text-white py-10 relative z-10 mt-auto">
                <div className="container mx-auto px-6">
                    <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
                        {/* UPT TIK Unila */}
                        <div>
                            <h3 className="text-sm font-bold mb-3 text-white">UPA TIK Unila</h3>
                            <p className="text-gray-300 text-xs leading-relaxed">
                                Gedung TIK Universitas Lampung<br/>
                                Jl. Prof. Dr. Ir. Sumantri Brojonegoro No.1<br/>
                                Gedong Meneng, Bandar Lampung, 35145
                            </p>
                        </div>

                        {/* Kontak Kami */}
                        <div>
                            <h3 className="text-sm font-bold mb-3 text-white">Kontak Kami</h3>
                            <ul className="text-gray-300 text-xs space-y-1">
                                <li>Email: helpdesk@tik.unila.ac.id</li>
                                <li>Telepon: (0721) 701609</li>
                                <li>WhatsApp: +62 812-3456-7890</li>
                            </ul>
                        </div>

                        {/* Tautan Cepat */}
                        <div>
                            <h3 className="text-sm font-bold mb-3 text-white">Tautan Cepat</h3>
                            <ul className="text-gray-300 text-xs space-y-1">
                                <li><a href="https://unila.ac.id" className="hover:text-blue-400 transition">Website Unila</a></li>
                                <li><a href="https://helpdesktik.unila.ac.id/" className="hover:text-blue-400 transition">Website UPA TIK</a></li>
                                <li><a href="#" className="hover:text-blue-400 transition">Panduan Penggunaan</a></li>
                            </ul>
                        </div>
                    </div>

                    <div className="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400 text-xs">
                        © 2025 Tim Pengembang Web Framework - DigiTamu TIK. All Rights Reserved.
                    </div>
                </div>
            </footer>
        </div>
    );
}
