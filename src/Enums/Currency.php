<?php declare(strict_types=1);

namespace Ecode\Enums;

/**
 * List of ISO 4217 currencies codes
 * See more: https://en.wikipedia.org/wiki/ISO_4217
 */
enum Currency: string implements EnumContract
{
    case AED = 'AED';
    case AFN = 'AFN';
    case ALL = 'ALL';
    case AMD = 'AMD';
    case ANG = 'ANG';
    case AOA = 'AOA';
    case ARS = 'ARS';
    case AUD = 'AUD';
    case AWG = 'AWG';
    case AZN = 'AZN';
    case BAM = 'BAM';
    case BBD = 'BBD';
    case BDT = 'BDT';
    case BGN = 'BGN';
    case BHD = 'BHD';
    case BIF = 'BIF';
    case BMD = 'BMD';
    case BND = 'BND';
    case BOB = 'BOB';
    case BRL = 'BRL';
    case BSD = 'BSD';
    case BTN = 'BTN';
    case BWP = 'BWP';
    case BYN = 'BYN';
    case BZD = 'BZD';
    case CAD = 'CAD';
    case CDF = 'CDF';
    case CHF = 'CHF';
    case CLP = 'CLP';
    case CNY = 'CNY';
    case COP = 'COP';
    case CRC = 'CRC';
    case CUC = 'CUC';
    case CUP = 'CUP';
    case CVE = 'CVE';
    case CZK = 'CZK';
    case DJF = 'DJF';
    case DKK = 'DKK';
    case DOP = 'DOP';
    case DZD = 'DZD';
    case EGP = 'EGP';
    case ERN = 'ERN';
    case ETB = 'ETB';
    case EUR = 'EUR';
    case FJD = 'FJD';
    case FKP = 'FKP';
    case GBP = 'GBP';
    case GEL = 'GEL';
    case GGP = 'GGP';
    case GHS = 'GHS';
    case GIP = 'GIP';
    case GMD = 'GMD';
    case GNF = 'GNF';
    case GTQ = 'GTQ';
    case GYD = 'GYD';
    case HKD = 'HKD';
    case HNL = 'HNL';
    case HRK = 'HRK';
    case HTG = 'HTG';
    case HUF = 'HUF';
    case IDR = 'IDR';
    case ILS = 'ILS';
    case IMP = 'IMP';
    case INR = 'INR';
    case IQD = 'IQD';
    case IRR = 'IRR';
    case ISK = 'ISK';
    case JEP = 'JEP';
    case JMD = 'JMD';
    case JOD = 'JOD';
    case JPY = 'JPY';
    case KES = 'KES';
    case KGS = 'KGS';
    case KHR = 'KHR';
    case KMF = 'KMF';
    case KPW = 'KPW';
    case KRW = 'KRW';
    case KWD = 'KWD';
    case KYD = 'KYD';
    case KZT = 'KZT';
    case LAK = 'LAK';
    case LBP = 'LBP';
    case LKR = 'LKR';
    case LRD = 'LRD';
    case LSL = 'LSL';
    case LYD = 'LYD';
    case MAD = 'MAD';
    case MDL = 'MDL';
    case MGA = 'MGA';
    case MKD = 'MKD';
    case MMK = 'MMK';
    case MNT = 'MNT';
    case MOP = 'MOP';
    case MRU = 'MRU';
    case MUR = 'MUR';
    case MVR = 'MVR';
    case MWK = 'MWK';
    case MXN = 'MXN';
    case MYR = 'MYR';
    case MZN = 'MZN';
    case NAD = 'NAD';
    case NGN = 'NGN';
    case NIO = 'NIO';
    case NOK = 'NOK';
    case NPR = 'NPR';
    case NZD = 'NZD';
    case OMR = 'OMR';
    case PAB = 'PAB';
    case PEN = 'PEN';
    case PGK = 'PGK';
    case PHP = 'PHP';
    case PKR = 'PKR';
    case PLN = 'PLN';
    case PYG = 'PYG';
    case QAR = 'QAR';
    case RON = 'RON';
    case RSD = 'RSD';
    case RUB = 'RUB';
    case RWF = 'RWF';
    case SAR = 'SAR';
    case SBD = 'SBD';
    case SCR = 'SCR';
    case SDG = 'SDG';
    case SEK = 'SEK';
    case SGD = 'SGD';
    case SHP = 'SHP';
    case SLL = 'SLL';
    case SOS = 'SOS';
    case SPL = 'SPL';
    case SRD = 'SRD';
    case STN = 'STN';
    case SVC = 'SVC';
    case SYP = 'SYP';
    case SZL = 'SZL';
    case THB = 'THB';
    case TJS = 'TJS';
    case TMT = 'TMT';
    case TND = 'TND';
    case TOP = 'TOP';
    case TRY = 'TRY';
    case TTD = 'TTD';
    case TVD = 'TVD';
    case TWD = 'TWD';
    case TZS = 'TZS';
    case UAH = 'UAH';
    case UGX = 'UGX';
    case USD = 'USD';
    case UYU = 'UYU';
    case UZS = 'UZS';
    case VEF = 'VEF';
    case VND = 'VND';
    case VUV = 'VUV';
    case WST = 'WST';
    case XAF = 'XAF';
    case XCD = 'XCD';
    case XDR = 'XDR';
    case XOF = 'XOF';
    case XPF = 'XPF';
    case YER = 'YER';
    case ZAR = 'ZAR';
    case ZMW = 'ZMW';
    case ZWD = 'ZWD';

    /**
     * @return array
     */
    public static function values(): array
    {
        return array_column(
            array: self::cases(),
            column_key: 'value'
        );
    }

    /**
     * @param mixed $value
     * @return ?self
     */
    public static function innFrom(mixed $value): ?self
    {
        if (is_null($value)) return null;
        return self::from($value);
    }

    /**
     * @return string
     */
    public function label(): string
    {
        return self::labels()[$this->value];
    }

    /**
     * @return string[]
     */
    public static function labels(): array
    {
        return [
            self::AED->value => 'United Arab Emirates Dirham',
            self::AFN->value => 'Afghanistan Afghani',
            self::ALL->value => 'Albania Lek',
            self::AMD->value => 'Armenia Dram',
            self::ANG->value => 'Netherlands Antilles Guilder',
            self::AOA->value => 'Angola Kwanza',
            self::ARS->value => 'Argentina Peso',
            self::AUD->value => 'Australia Dollar',
            self::AWG->value => 'Aruba Guilder',
            self::AZN->value => 'Azerbaijan Manat',
            self::BAM->value => 'Bosnia and Herzegovina Convertible Mark',
            self::BBD->value => 'Barbados Dollar',
            self::BDT->value => 'Bangladesh Taka',
            self::BGN->value => 'Bulgaria Lev',
            self::BHD->value => 'Bahrain Dinar',
            self::BIF->value => 'Burundi Franc',
            self::BMD->value => 'Bermuda Dollar',
            self::BND->value => 'Brunei Darussalam Dollar',
            self::BOB->value => 'Bolivia Bolíviano',
            self::BRL->value => 'Brazil Real',
            self::BSD->value => 'Bahamas Dollar',
            self::BTN->value => 'Bhutan Ngultrum',
            self::BWP->value => 'Botswana Pula',
            self::BYN->value => 'Belarus Ruble',
            self::BZD->value => 'Belize Dollar',
            self::CAD->value => 'Canada Dollar',
            self::CDF->value => 'Congo/Kinshasa Franc',
            self::CHF->value => 'Switzerland Franc',
            self::CLP->value => 'Chile Peso',
            self::CNY->value => 'China Yuan Renminbi',
            self::COP->value => 'Colombia Peso',
            self::CRC->value => 'Costa Rica Colon',
            self::CUC->value => 'Cuba Convertible Peso',
            self::CUP->value => 'Cuba Peso',
            self::CVE->value => 'Cape Verde Escudo',
            self::CZK->value => 'Czech Republic Koruna',
            self::DJF->value => 'Djibouti Franc',
            self::DKK->value => 'Denmark Krone',
            self::DOP->value => 'Dominican Republic Peso',
            self::DZD->value => 'Algeria Dinar',
            self::EGP->value => 'Egypt Pound',
            self::ERN->value => 'Eritrea Nakfa',
            self::ETB->value => 'Ethiopia Birr',
            self::EUR->value => 'Euro Member Countries',
            self::FJD->value => 'Fiji Dollar',
            self::FKP->value => 'Falkland Islands (Malvinas) Pound',
            self::GBP->value => 'United Kingdom Pound',
            self::GEL->value => 'Georgia Lari',
            self::GGP->value => 'Guernsey Pound',
            self::GHS->value => 'Ghana Cedi',
            self::GIP->value => 'Gibraltar Pound',
            self::GMD->value => 'Gambia Dalasi',
            self::GNF->value => 'Guinea Franc',
            self::GTQ->value => 'Guatemala Quetzal',
            self::GYD->value => 'Guyana Dollar',
            self::HKD->value => 'Hong Kong Dollar',
            self::HNL->value => 'Honduras Lempira',
            self::HRK->value => 'Croatia Kuna',
            self::HTG->value => 'Haiti Gourde',
            self::HUF->value => 'Hungary Forint',
            self::IDR->value => 'Indonesia Rupiah',
            self::ILS->value => 'Israel Shekel',
            self::IMP->value => 'Isle of Man Pound',
            self::INR->value => 'India Rupee',
            self::IQD->value => 'Iraq Dinar',
            self::IRR->value => 'Iran Rial',
            self::ISK->value => 'Iceland Krona',
            self::JEP->value => 'Jersey Pound',
            self::JMD->value => 'Jamaica Dollar',
            self::JOD->value => 'Jordan Dinar',
            self::JPY->value => 'Japan Yen',
            self::KES->value => 'Kenya Shilling',
            self::KGS->value => 'Kyrgyzstan Som',
            self::KHR->value => 'Cambodia Riel',
            self::KMF->value => 'Comorian Franc',
            self::KPW->value => 'Korea (North) Won',
            self::KRW->value => 'Korea (South) Won',
            self::KWD->value => 'Kuwait Dinar',
            self::KYD->value => 'Cayman Islands Dollar',
            self::KZT->value => 'Kazakhstan Tenge',
            self::LAK->value => 'Laos Kip',
            self::LBP->value => 'Lebanon Pound',
            self::LKR->value => 'Sri Lanka Rupee',
            self::LRD->value => 'Liberia Dollar',
            self::LSL->value => 'Lesotho Loti',
            self::LYD->value => 'Libya Dinar',
            self::MAD->value => 'Morocco Dirham',
            self::MDL->value => 'Moldova Leu',
            self::MGA->value => 'Madagascar Ariary',
            self::MKD->value => 'Macedonia Denar',
            self::MMK->value => 'Myanmar (Burma) Kyat',
            self::MNT->value => 'Mongolia Tughrik',
            self::MOP->value => 'Macau Pataca',
            self::MRU->value => 'Mauritania Ouguiya',
            self::MUR->value => 'Mauritius Rupee',
            self::MVR->value => 'Maldives (Maldive Islands) Rufiyaa',
            self::MWK->value => 'Malawi Kwacha',
            self::MXN->value => 'Mexico Peso',
            self::MYR->value => 'Malaysia Ringgit',
            self::MZN->value => 'Mozambique Metical',
            self::NAD->value => 'Namibia Dollar',
            self::NGN->value => 'Nigeria Naira',
            self::NIO->value => 'Nicaragua Cordoba',
            self::NOK->value => 'Norway Krone',
            self::NPR->value => 'Nepal Rupee',
            self::NZD->value => 'New Zealand Dollar',
            self::OMR->value => 'Oman Rial',
            self::PAB->value => 'Panama Balboa',
            self::PEN->value => 'Peru Sol',
            self::PGK->value => 'Papua New Guinea Kina',
            self::PHP->value => 'Philippines Peso',
            self::PKR->value => 'Pakistan Rupee',
            self::PLN->value => 'Poland Zloty',
            self::PYG->value => 'Paraguay Guarani',
            self::QAR->value => 'Qatar Riyal',
            self::RON->value => 'Romania Leu',
            self::RSD->value => 'Serbia Dinar',
            self::RUB->value => 'Russia Ruble',
            self::RWF->value => 'Rwanda Franc',
            self::SAR->value => 'Saudi Arabia Riyal',
            self::SBD->value => 'Solomon Islands Dollar',
            self::SCR->value => 'Seychelles Rupee',
            self::SDG->value => 'Sudan Pound',
            self::SEK->value => 'Sweden Krona',
            self::SGD->value => 'Singapore Dollar',
            self::SHP->value => 'Saint Helena Pound',
            self::SLL->value => 'Sierra Leone Leone',
            self::SOS->value => 'Somalia Shilling',
            self::SPL->value => 'Seborga Luigino',
            self::SRD->value => 'Suriname Dollar',
            self::STN->value => 'São Tomé and Príncipe Dobra',
            self::SVC->value => 'El Salvador Colon',
            self::SYP->value => 'Syria Pound',
            self::SZL->value => 'eSwatini Lilangeni',
            self::THB->value => 'Thailand Baht',
            self::TJS->value => 'Tajikistan Somoni',
            self::TMT->value => 'Turkmenistan Manat',
            self::TND->value => 'Tunisia Dinar',
            self::TOP->value => 'Tonga Pa\'anga',
            self::TRY->value => 'Turkey Lira',
            self::TTD->value => 'Trinidad and Tobago Dollar',
            self::TVD->value => 'Tuvalu Dollar',
            self::TWD->value => 'Taiwan New Dollar',
            self::TZS->value => 'Tanzania Shilling',
            self::UAH->value => 'Ukraine Hryvnia',
            self::UGX->value => 'Uganda Shilling',
            self::USD->value => 'United States Dollar',
            self::UYU->value => 'Uruguay Peso',
            self::UZS->value => 'Uzbekistan Som',
            self::VEF->value => 'Venezuela Bolívar',
            self::VND->value => 'Viet Nam Dong',
            self::VUV->value => 'Vanuatu Vatu',
            self::WST->value => 'Samoa Tala',
            self::XAF->value => 'Communauté Financière Africaine (BEAC) CFA Franc BEAC',
            self::XCD->value => 'East Caribbean Dollar',
            self::XDR->value => 'International Monetary Fund (IMF) Special Drawing Rights',
            self::XOF->value => 'Communauté Financière Africaine (BCEAO) Franc',
            self::XPF->value => 'Comptoirs Français du Pacifique (CFP) Franc',
            self::YER->value => 'Yemen Rial',
            self::ZAR->value => 'South Africa Rand',
            self::ZMW->value => 'Zambia Kwacha',
            self::ZWD->value => 'Zimbabwe Dollar',
        ];
    }
}
