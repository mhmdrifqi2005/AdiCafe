<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AdiCoffe - Spesialis Kopi</title>
    <!-- Link ke file CSS terpisah -->
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- Header -->
    <header>
        <div class="containerheader">
            <div class="header">
                <a href="#">
                    <img src="images/logo.jpg.PNG" class="logo" />
                </a>
                <nav class="nav">
                    <ul>
                        <li><a href="#beranda">Beranda</a></li>
                        <li><a href="#tentang-kami">Tentang kami</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#hubungi-kami">Hubungi Kami</a></li>
                    </ul>
                </nav>
                <a href="#cart-modal" class="cart-icon">
                    <img src="images/shopping-cart.svg" alt="Keranjang" />
                    <span class="cart-count">0</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="beranda">
        <div class="hero-text">
            <h1>Welcome to AdiCoffe</h1>
            <p>Spesialis Anda untuk Kopi Spesialiti</p>
        </div>

    </section>

    <!-- Tentang Kami Section -->
    <section class="about" id="tentang-kami">
        <div class="containerabout">
            <div class="about-container">
                <!-- Gambar tentang kami -->
                <div class="about-image">
                    <img src="images/about.jpg" alt="Tentang AdiCafe" />
                </div>
                <!-- Teks tentang kami -->
                <div class="about-text">
                    <h2><span>Tentang</span> Kami</h2>
                    <hr />
                    <p>
                        Selamat datang di AdiCafe — tempat di mana setiap cangkir kopi dan
                        setiap gigitan makanan dibuat dengan penuh cinta dan perhatian. Kami
                        percaya bahwa Cafe bukan hanya tempat untuk menikmati minuman,
                        tetapi juga untuk merayakan momen-momen kecil dalam hidup yang penuh
                        kebahagiaan.
                    </p>
                    <p>
                        Di AdiCafe, kami mengutamakan kualitas dan kenyamanan. Kami menggunakan bahan-bahan terbaik yang dipilih dengan cermat untuk menciptakan cita rasa yang unik dan memanjakan lidah Anda. Dari kopi pilihan hingga hidangan lezat yang disajikan penuh kreativitas — setiap detail kami perhatikan agar setiap kunjungan Anda menjadi pengalaman yang tak terlupakan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu -->
    <section class="menu-section" id="menu">
        <h2 class="menu-title">Menu Kami</h2>
        <p class="menu-subtitle">Temukan berbagai pilihan kopi lezat dan nikmati sensasi rasa yang berbeda!</p>
        <div class="menuitem">
            <div class="menu-grid">
                <div class="menu-item">
                    <img src="images/Americano.jpg.jpeg" alt="Americano Coffee" />
                    <h3>~ Americano Coffee ~</h3>
                    <p>IDR 18000</p>
                    <button class="add-to-cart-btn">Tambah ke Keranjang</button>
                </div>
                <div class="menu-item" id="add-to-cart-btn">
                    <img src="images/Affogato (Espresso with Ice Cream).jpg.jpeg" alt="Affogato" />
                    <h3>~ Affogato (Espresso with Ice Cream) ~</h3>
                    <p>IDR 35000</p>
                    <button class="add-to-cart-btn">Tambah ke Keranjang</button>
                </div>
                <div class="menu-item" id="add-to-cart-btn">
                    <img src="images/Cappuccino.jpg.jpeg" alt="Cappuccino" />
                    <h3>~ Cappuccino ~</h3>
                    <p>IDR 25000</p>
                    <button class="add-to-cart-btn">Tambah ke Keranjang</button>
                </div>
                <div class="menu-item" id="add-to-cart-btn">
                    <img src="images/Caramel Macchiato.jpg.jpeg" alt="Caramel Macchiato" />
                    <h3>~ Caramel Macchiato ~</h3>
                    <p>IDR 18000</p>
                    <button class="add-to-cart-btn">Tambah ke Keranjang</button>
                </div>
                <div class="menu-item" id="add-to-cart-btn">
                    <img src="images/Espresso.jpg.jpeg" alt="Espresso" />
                    <h3>~ Espresso ~</h3>
                    <p>IDR 35000</p>
                    <button class="add-to-cart-btn">Tambah ke Keranjang</button>
                </div>
                <div class="menu-item" id="add-to-cart-btn">
                    <img src="images/Flat White.jpg.jpeg" alt="Flat White" />
                    <h3>~ Flat White ~</h3>
                    <p>IDR 25000</p>
                    <button class="add-to-cart-btn">Tambah ke Keranjang</button>
                </div>
                <div class="menu-item" id="add-to-cart-btn">
                    <img src="images/Iced Cappucino.jpg.jpeg" alt="Iced Cappucino" />
                    <h3>~ Iced Cappucino ~</h3>
                    <p>IDR 18000</p>
                    <button class="add-to-cart-btn">Tambah ke Keranjang</button>
                </div>
                <div class="menu-item" id="add-to-cart-btn">
                    <img src="images/Iced Coffe.jpg.jpeg" alt="Iced Coffe" />
                    <h3>~ Iced Coffe ~</h3>
                    <p>IDR 35000</p>
                    <button class="add-to-cart-btn">Tambah ke Keranjang</button>
                </div>
                <div class="menu-item" id="add-to-cart-btn">
                    <img src="images/Latte.jpg.jpeg" alt="Latte" />
                    <h3>~ Latte ~</h3>
                    <p>IDR 25000</p>
                    <button class="add-to-cart-btn">Tambah ke Keranjang</button>
                </div>
                <div class="menu-item" id="add-to-cart-btn">
                    <img src="images/Mocca.jpg.jpeg" alt="Mocca" />
                    <h3>~ Mocca ~</h3>
                    <p>IDR 18000</p>
                    <button class="add-to-cart-btn">Tambah ke Keranjang</button>
                </div>
                <div class="menu-item" id="add-to-cart-btn">
                    <img src="images/Nitro Cold Brew.jpg.jpeg" alt="Nitro Cold Brew" />
                    <h3>~ Nitro Cold Brew ~</h3>
                    <p>IDR 35000</p>
                    <button class="add-to-cart-btn">Tambah ke Keranjang</button>
                </div>
                <div class="menu-item" id="add-to-cart-btn">
                    <img src="images/1.jpg.jpeg" alt="Milo Coffe" />
                    <h3>~ Milo Coffe ~</h3>
                    <p>IDR 25000</p>
                    <button class="add-to-cart-btn">Tambah ke Keranjang</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Halaman Keranjang -->
    <section id="cart-modal" class="cart-modal hidden">
        <div>
            <div class="cart-content">
                <h2>Keranjang Belanja</h2>
                <ul id="cart-items">
                    <!-- Daftar item keranjang akan muncul di sini -->
                </ul>
                <div class="cart-total">
                    <h3>Total: <span id="cart-total-price">0</span> IDR</h3>
                </div>
                <button id="checkout-btn" class="checkout-btn">Checkout</button>
                <button id="close-cart" class="close-cart">Tutup</button>
            </div>
        </div>
    </section>

    <div id="confirmation-modal" class="hidden">
        <div class="confirmation-content">
            <h2>Terima Kasih!</h2>
            <p>Pembayaran Anda telah berhasil. Pesanan Anda sedang diproses.</p>
            <button id="close-confirmation" class="close-confirmation">Tutup</button>
        </div>
    </div>


    <!-- Footer -->
    <section class="contact-section" id="hubungi-kami">
        <h2 class="contact-title">Hubungi Kami</h2>
        <div class="contact-card">
            <div class="contact-info">
                <h3>Alamat</h3>
                <p>Jl. Empu Sendok, Banyumanik</p>
                <h3>Email</h3>
                <p><a href="mailto:info@adicafe.com">info@adicafe.com</a></p>
                <h3>Telepon</h3>
                <p><a href="tel:+6281234567890">+62 812 3456 7890</a></p>
            </div>
            <div class="contact-action">
                <h3>Kontak Langsung</h3>
                <p>Hubungi kami melalui WhatsApp untuk pertanyaan lebih lanjut:</p>
                <a href="https://wa.me/6282111725143?text=Halo%20AdiCafe,%20saya%20ingin%20bertanya!"
                    class="whatsapp-btn" target="_blank">WhatsApp Kami</a>
            </div>
        </div>
    </section>

    <!-- Footer start -->
    <footer>
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="credit">
            <p>Created by <a href="">MohamadRifqiAdiPrayoga</a>. | &copy; 2024.</p>
        </div>
    </footer>
    <!-- Footer end -->

    <script>
        // GUI Programming //
        const cartIcon = document.querySelector('.cart-icon');
        const cartModal = document.getElementById('cart-modal');
        const closeCart = document.getElementById('close-cart');
        const cartItemsContainer = document.getElementById('cart-items');
        const cartTotalPrice = document.getElementById('cart-total-price');
        const menuItems = document.querySelectorAll('.menu-item');
        const cartCount = document.querySelector('.cart-count');
        const confirmationModal = document.getElementById('confirmation-modal');
        const closeConfirmation = document.getElementById('close-confirmation');
        const checkoutButton = document.getElementById('checkout-btn'); // GUI Programming //

        let cart = []; // Variabel, Tipe Data, dan Array //

        // Fungsi untuk menambahkan item ke keranjang
        function addToCart(item) { // Function and Method //
            const existingItem = cart.find(cartItem => cartItem.name === item.name);
            if (existingItem) { // Pengkondisian //
                existingItem.quantity++;
            } else {
                cart.push(item); // Struktur Data dan Queue //
            }
            updateCart();
        } // Function and Method //

        // Fungsi untuk memperbarui tampilan keranjang
        function updateCart() { // Function and Method //
            cartItemsContainer.innerHTML = ''; // Variabel, Tipe Data, dan Array // // Bersihkan daftar item di keranjang //
            let total = 0; // Variabel, Tipe Data, dan Array //
            let totalItems = 0; // Variabel, Tipe Data, dan Array //

            // Perbarui tampilan keranjang
            cart.forEach(item => { // Perulangan //
                const cartItem = document.createElement('li');
                cartItem.innerHTML = `
                ${item.name} (x${item.quantity}) - ${item.price * item.quantity} IDR
                <button class="remove-btn" data-name="${item.name}">Hapus</button>
            `;
                cartItemsContainer.appendChild(cartItem);

                total += item.price * item.quantity;
                totalItems += item.quantity;
            }); // Perulangan //

            cartTotalPrice.textContent = total;
            cartCount.textContent = totalItems;
            attachRemoveEvents();
        } // Function and Method //

        // Fungsi untuk menghapus item dari keranjang
        function removeFromCart(itemName) {
            cart = cart.filter(item => item.name !== itemName); // Struktur Data dan Queue //
            updateCart();
        }

        // Event untuk menutup modal keranjang
        closeCart.addEventListener('click', () => {
            cartModal.classList.add('hidden');
        });

        // Event untuk membuka modal keranjang
        cartIcon.addEventListener('click', () => {
            cartModal.classList.remove('hidden');
        });

        // Tambahkan event listener untuk setiap menu item
        menuItems.forEach(menuItem => {
            const name = menuItem.querySelector('h3').textContent.trim();
            const price = parseInt(menuItem.querySelector('p').textContent.replace('IDR', '').trim());
            const addToCartButton = menuItem.querySelector('.add-to-cart-btn');

            // Event listener untuk tombol tambah ke keranjang
            addToCartButton.addEventListener('click', () => { // GUI Programming //
                addToCart({
                    name,
                    price,
                    quantity: 1
                });
            });
        }); // GUI Programming //

        // Fungsi untuk menambahkan event pada tombol "Hapus"
        function attachRemoveEvents() {
            const removeButtons = document.querySelectorAll('.remove-btn');
            removeButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const itemName = button.getAttribute('data-name');
                    removeFromCart(itemName); // Menghapus item berdasarkan nama
                });
            });
        }

        // Event untuk tombol checkout
        checkoutButton.addEventListener('click', () => {
            if (cart.length === 0) { // Pengkondisian //
                alert('Keranjang Anda kosong!');
                return;
            }

            // Tampilkan modal konfirmasi pembayaran
            confirmationModal.classList.remove('hidden');
            cartModal.classList.add('hidden'); // Tutup modal keranjang

            // Reset keranjang setelah checkout
            cart = [];
            updateCart(); // Update keranjang kosong
        });

        // Event untuk menutup modal konfirmasi pembayaran
        closeConfirmation.addEventListener('click', () => {
            confirmationModal.classList.add('hidden');
        });
    </script>


</body>

</html>