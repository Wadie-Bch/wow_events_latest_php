<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="fr" id="top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOW Events- Organisation d'Événements</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./assets/logo_nobg.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <?php if (isset($_GET['success'])): ?>
    <div class="static-toast toast-success" data-fr="Merci pour votre message! Nous vous contacterons bientôt." data-en="Thank you for your message! We'll contact you soon." data-darija="شكرا على رسالتك! سنتصل بك قريبا.">Merci pour votre message! Nous vous contacterons bientôt.</div>
    <?php endif; ?>
    
    <div class="balloon-container"></div>
    <div class="language-switcher">
        <button onclick="switchLanguage('fr')" class="lang-btn active" data-lang="fr">Français</button>
        <button onclick="switchLanguage('en')" class="lang-btn" data-lang="en">English</button>
        <button onclick="switchLanguage('darija')" class="lang-btn" data-lang="darija">الدارجة</button>
    </div>
    <div id="goToTopBtn" class="go-to-top-btn">
        <i class="fas fa-arrow-up"></i>
    </div>
    <nav>
        <img src="./assets/logo_nobg.png" class="logo-img" alt="logo.jpg">
        <div class="nav-links">
            <a href="#home" data-fr="Accueil" data-en="Home" data-darija="الرئيسية">Accueil</a>
            <a href="#services" data-fr="Services" data-en="Services" data-darija="خدمات">Services</a>
            <a href="#portfolio" data-fr="Portfolio" data-en="Portfolio" data-darija="أعمالنا">Portfolio</a>
            <a href="#about" data-fr="À Propos" data-en="About" data-darija="معلومات علينا">À Propos</a>
            <a href="#contact" data-fr="Contact" data-en="Contact" data-darija="اتصل بنا">Contact</a>
            <a href="#book" class="book-btn" data-fr="Réserver" data-en="Book Now" data-darija="احجز دابا">Réserver</a>
        </div>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <section id="home" class="hero">
        <video autoplay muted loop id="heroVideo">
            <source src="./assets/hero.mp4" type="video/mp4">
        </video>
        <div class="hero-content">
            <h1 data-fr="Créons des Moments Inoubliables" data-en="Creating Unforgettable Moments" data-darija="نخلقو لحظات ما تتنساش">Créons des Moments Inoubliables</h1>
            <p data-fr="Organisation d'Événements de Premier Choix au Maroc" data-en="Premier Event Planning in Morocco" data-darija="تنظيم الحفلات الراقية في المغرب">Organisation d'Événements de Premier Choix au Maroc</p>
            <a href="#book" class="cta-btn" data-fr="Planifiez Votre Événement" data-en="Plan Your Event" data-darija="خطط لحفلتك">Planifiez Votre Événement</a>
        </div>
    </section>

    <section id="services" class="services">
        <h2 data-fr="Nos Services" data-en="Our Services" data-darija="خدماتنا">Nos Services</h2>
        <div class="services-grid">
            <div class="service-card">
                <i class="fas fa-glass-cheers"></i>
                <h3 data-fr="Mariages" data-en="Weddings" data-darija="عراسات">Mariages</h3>
                <p data-fr="Rendez votre jour spécial vraiment magique" data-en="Make your special day truly magical" data-darija="نخليو نهار عرسك ساحر">Rendez votre jour spécial vraiment magique</p>
            </div>
            <div class="service-card">
                <i class="fas fa-birthday-cake"></i>
                <h3 data-fr="Anniversaires" data-en="Birthdays" data-darija="عيد الميلاد">Anniversaires</h3>
                <p data-fr="Célébrez vos moments importants avec style" data-en="Celebrate your important moments with style" data-darija="احتفل بلحظاتك المهمة بأناقة">Célébrez vos moments importants avec style</p>
            </div>
            <div class="service-card">
                <i class="fas fa-briefcase"></i>
                <h3 data-fr="Événements Professionnels" data-en="Corporate Events" data-darija="مناسبات مهنية">Événements Professionnels</h3>
                <p data-fr="Des événements professionnels qui marquent" data-en="Professional events that make an impact" data-darija="حفلات احترافية كتخلي أثر">Des événements professionnels qui marquent</p>
            </div>
            <div class="service-card">
                <i class="fas fa-music"></i>
                <h3 data-fr="Festivals" data-en="Festivals" data-darija="مهرجانات">Festivals</h3>
                <p data-fr="Événements de divertissement à grande échelle" data-en="Large-scale entertainment events" data-darija="حفلات كبيرة ومميزة">Événements de divertissement à grande échelle</p>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <h2 data-fr="Notre Portfolio" data-en="Our Portfolio" data-darija="أعمالنا">Notre Portfolio</h2>
        <div class="portfolio-grid">
            <div class="portfolio-item">
                <img src="./assets/image6.jpeg" alt="Event Setup">
                <div class="overlay">
                    <h3 data-fr="Organisation d'Événements" data-darija="تنظيم المناسبات">Organisation d'Événements</h3>
                    <p data-fr="Casablanca, 2024" data-darija="الدار البيضاء، 2024">Casablanca, 2024</p>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="./assets/image4.jpeg" alt="Character Entertainment">
                <div class="overlay">
                    <h3 data-fr="Animation Personnages" data-darija="شخصيات كرتونية">Animation Personnages</h3>
                    <p data-fr="Marrakech, 2024" data-darija="مراكش، 2024">Marrakech, 2024</p>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="./assets/image3.jpeg" alt="Outdoor Events">
                <div class="overlay">
                    <h3 data-fr="Événements en Plein Air" data-darija="مناسبات خارجية">Événements en Plein Air</h3>
                    <p data-fr="Rabat, 2024" data-darija="الرباط، 2024">Rabat, 2024</p>
                </div>
            </div>
            <!-- <div class="portfolio-item">
                <img src="./assets/image5.jpeg" alt="Character Meet">
                <div class="overlay">
                    <h3 data-fr="Rencontres Personnages" data-darija="لقاء الشخصيات">Rencontres Personnages</h3>
                    <p data-fr="Tanger, 2024" data-darija="طنجة، 2024">Tanger, 2024</p>
                </div>
            </div> -->
        </div>
    </section>
    <section id="about" class="about">
        <h2 data-fr="À Propos de WOW Events" data-en="About WOW Events" data-darija="معلومات علينا">À Propos de WOW Events</h2>
        <div class="about-content">
            <div class="about-image">
                <img src="./assets/image1.jpeg" alt="Character Entertainment" class="about-character">
                <img src="./assets/image2.jpeg" alt="Mascot Entertainment" class="about-mascot">
            </div>
            <div class="about-text">
                <p data-fr="Depuis notre lancement, nous nous engageons à créer des événements exceptionnels, alliant créativité et excellence. Notre équipe de professionnels passionnés s'assure que chaque détail est parfait, transformant vos rêves en réalité. Nous sommes fiers de notre réputation d'excellence et de notre capacité à dépasser les attentes de nos clients à chaque projet." data-en="Since our launch, we have been committed to creating exceptional events, combining creativity and excellence. Our team of passionate professionals ensures that every detail is perfect, turning your dreams into reality. We take pride in our reputation for excellence and our ability to exceed our clients' expectations with every project." data-darija="منذ إنشائنا، قمنا باستثمار تجارب نقاشنا قبل إنشائنا في جميع أنحاء المغرب و الأكاديمية. واهتمامنا بالتفاصيل يجعلنا بيزان في صناعة تنظيم الفعاليات">Depuis notre lancement, nous nous engageons à créer des événements exceptionnels, alliant créativité et excellence. Notre équipe de professionnels passionnés s'assure que chaque détail est parfait, transformant vos rêves en réalité. Nous sommes fiers de notre réputation d'excellence et de notre capacité à dépasser les attentes de nos clients à chaque projet.</p>
                <ul class="achievements">
                    <li data-fr="<span>500+</span> Événements Organisés" data-en="<span>500+</span> Events Organized" data-darija="<span>500+</span> حدث منظم"><span>500+</span> Événements Organisés</li>
                    <li data-fr="<span>50+</span> Clients Entreprises" data-en="<span>50+</span> Corporate Clients" data-darija="<span>50+</span> زبون شركة"><span>50+</span> Clients Entreprises</li>
                    <li data-fr="<span>100%</span> Satisfaction Client" data-en="<span>100%</span> Client Satisfaction" data-darija="<span>100%</span> رضا العملاء"><span>100%</span> Satisfaction Client</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="book" class="book">
        <h2 data-fr="Réservez Votre Événement" data-en="Book Your Event" data-darija="احجز حدثك">
            Réservez Votre Événement
        </h2>

        <!-- action vers notre script PHP -->
        <form id="bookingForm" action="process_booking.php" method="POST">
            <div class="form-group">
                <input type="text" name="name" required placeholder="Votre Nom" data-fr-placeholder="Votre Nom" data-en-placeholder="Your Name" data-darija-placeholder="سميتك">
            </div>
            <div class="form-group">
                <input type="email" name="email" required placeholder="Votre Email" data-fr-placeholder="Votre Email" data-en-placeholder="Your Email" data-darija-placeholder="البريد الإلكتروني ديالك">
            </div>
            <div class="form-group">
                <input type="tel" name="phone" required placeholder="Numéro de Téléphone" data-fr-placeholder="Numéro de Téléphone" data-en-placeholder="Phone Number" data-darija-placeholder="رقم الهاتف">
            </div>
            <div class="form-group">
                <select name="eventType" required data-fr-placeholder="Sélectionnez le Type d'Événement" data-en-placeholder="Select Event Type" data-darija-placeholder="اختر نوع الحدث">
                    <option value="" class="placeholder-option">Sélectionnez le Type d'Événement</option>
                    <option value="Mariage" data-fr="Mariage" data-en="Wedding" data-darija="زواج">Mariage</option>
                    <option value="Événement Entreprise" data-fr="Événement Entreprise" data-en="Corporate Event" data-darija="حدث شركة">Événement Entreprise</option>
                    <option value="Anniversaire" data-fr="Anniversaire" data-en="Birthday" data-darija="عيد ميلاد">Anniversaire</option>
                    <option value="Anniversaire de Mariage" data-fr="Anniversaire de Mariage" data-en="Wedding Anniversary" data-darija="ذكرى زواج">Anniversaire de Mariage</option>
                    <option value="Autre" data-fr="Autre" data-en="Other" data-darija="آخر">Autre</option>
                </select>
            </div>
            <div class="form-group">
                <textarea name="message" required placeholder="Dites-nous à propos de votre événement" data-fr-placeholder="Dites-nous à propos de votre événement" data-en-placeholder="Tell us about your event" data-darija-placeholder="قول لنا على الحدث ديالك"></textarea>
            </div>
            <button type="submit" class="submit-btn" data-fr="Envoyer la Demande" data-en="Send Request" data-darija="إرسال الطلب">Envoyer la Demande</button>
        </form>

        <?php if (isset($_GET['ok'])): ?>
            <p class="success" data-fr="Merci ! Votre demande a bien été envoyée." data-en="Thank you! Your request has been sent." data-darija="شكرا! تم إرسال طلبك.">Merci ! Votre demande a bien été envoyée.</p>
        <?php endif; ?>
    </section>

    <section id="contact" class="contact">
        <h2 data-fr="Contactez-Nous" data-en="Contact Us" data-darija="اتصل بنا">Contactez-Nous</h2>
        <div class="contact-info">
            <div class="contact-card">
                <i class="fas fa-map-marker-alt"></i>
                <p data-fr="Casablanca, Maroc" data-en="Casablanca, Morocco" data-darija="الدار البيضاء، المغرب">Casablanca, Maroc</p>
            </div>
            <div class="contact-card">
                <i class="fas fa-phone"></i>
                <p>+212690-227638</p>
            </div>
            <div class="contact-card">
                <i class="fas fa-envelope"></i>
                <p>contact@woweventsofficial.com</p>
            </div>
        </div>
        <div class="social-links">
            <a href="https://www.instagram.com/wowevents_official?igsh=OHI3c3loN2R6M28=" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <p data-fr="&copy; 2025 WOW Events Maroc. Tous droits réservés." data-en="&copy; 2025 WOW Events Morocco. All rights reserved." data-darija="&copy; 2025 WOW Events المغرب. جميع الحقوق محفوظة.">&copy; 2025 WOW Events Maroc. Tous droits réservés.</p>
            <p class="creator"><span data-fr="Créé avec ❤️ par" data-en="Created with ❤️ by" data-darija="صمم بـ ❤️ بواسطة">Créé avec ❤️ par</span> <a target="_blank" rel="noopener noreferrer" class="creator-link" href="https://wadie-bch.com">wadie-bch.com</a></p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>