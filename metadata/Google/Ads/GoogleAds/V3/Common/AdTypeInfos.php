<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/common/ad_type_infos.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V3\Common;

class AdTypeInfos
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab4040a43676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f63616c6c5f636f6e76657273696f6e5f7265706f7274696e675f73746174652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322cc010a2043616c6c436f6e76657273696f6e5265706f7274696e675374617465456e756d22a7010a1c43616c6c436f6e76657273696f6e5265706f7274696e675374617465120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120c0a0844495341424c45441002122c0a285553455f4143434f554e545f4c4556454c5f43414c4c5f434f4e56455253494f4e5f414354494f4e1003122d0a295553455f5245534f555243455f4c4556454c5f43414c4c5f434f4e56455253494f4e5f414354494f4e100442f6010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73422143616c6c436f6e76657273696f6e5265706f7274696e67537461746550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330aff030a3b676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f7365727665645f61737365745f6669656c645f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322a7010a1853657276656441737365744669656c6454797065456e756d228a010a1453657276656441737365744669656c6454797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120e0a0a484541444c494e455f311002120e0a0a484541444c494e455f321003120e0a0a484541444c494e455f33100412110a0d4445534352495054494f4e5f31100512110a0d4445534352495054494f4e5f32100642ee010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73421953657276656441737365744669656c645479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330adc050a2d676f6f676c652f6164732f676f6f676c656164732f76332f636f6d6d6f6e2f61645f61737365742e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f229d010a0b4164546578744173736574122a0a047465787418012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512620a0c70696e6e65645f6669656c6418022001280e324c2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e53657276656441737365744669656c6454797065456e756d2e53657276656441737365744669656c6454797065223b0a0c4164496d6167654173736574122b0a05617373657418012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565223b0a0c4164566964656f4173736574122b0a05617373657418012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522410a1241644d6564696142756e646c654173736574122b0a05617373657418012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756542e7010a22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e420c4164417373657450726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f636f6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e56332e436f6d6d6f6eca021e476f6f676c655c4164735c476f6f676c654164735c56335c436f6d6d6f6eea0222476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a436f6d6d6f6e620670726f746f330add030a3d676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f646973706c61795f61645f666f726d61745f73657474696e672e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732281010a1a446973706c61794164466f726d617453657474696e67456e756d22630a16446973706c61794164466f726d617453657474696e67120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120f0a0b414c4c5f464f524d4154531002120e0a0a4e4f4e5f4e41544956451003120a0a064e4154495645100442f0010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73421b446973706c61794164466f726d617453657474696e6750726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330aa7040a43676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f6c65676163795f6170705f696e7374616c6c5f61645f6170705f73746f72652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322c1010a1e4c6567616379417070496e7374616c6c416441707053746f7265456e756d229e010a1a4c6567616379417070496e7374616c6c416441707053746f7265120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112130a0f4150504c455f4150505f53544f52451002120f0a0b474f4f474c455f504c4159100312110a0d57494e444f57535f53544f5245100412170a1357494e444f57535f50484f4e455f53544f5245100512100a0c434e5f4150505f53544f5245100642f4010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73421f4c6567616379417070496e7374616c6c416441707053746f726550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330adc050a3f676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f646973706c61795f75706c6f61645f70726f647563745f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322fc020a1c446973706c617955706c6f616450726f6475637454797065456e756d22db020a18446973706c617955706c6f616450726f6475637454797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112130a0f48544d4c355f55504c4f41445f41441002121e0a1a44594e414d49435f48544d4c355f454455434154494f4e5f41441003121b0a1744594e414d49435f48544d4c355f464c494748545f4144100412210a1d44594e414d49435f48544d4c355f484f54454c5f52454e54414c5f4144100512180a1444594e414d49435f48544d4c355f4a4f425f41441006121a0a1644594e414d49435f48544d4c355f4c4f43414c5f4144100712200a1c44594e414d49435f48544d4c355f5245414c5f4553544154455f41441008121b0a1744594e414d49435f48544d4c355f435553544f4d5f41441009121b0a1744594e414d49435f48544d4c355f54524156454c5f4144100a121a0a1644594e414d49435f48544d4c355f484f54454c5f4144100b42f2010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73421d446973706c617955706c6f616450726f647563745479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330a9a040a2d676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f6d696d655f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322dc010a0c4d696d6554797065456e756d22cb010a084d696d6554797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120e0a0a494d4147455f4a5045471002120d0a09494d4147455f4749461003120d0a09494d4147455f504e47100412090a05464c4153481005120d0a09544558545f48544d4c100612070a035044461007120a0a064d53574f52441008120b0a074d53455843454c100912070a03525446100a120d0a09415544494f5f574156100b120d0a09415544494f5f4d5033100c12100a0c48544d4c355f41445f5a4950100d42e2010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73420d4d696d655479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330ad9440a32676f6f676c652f6164732f676f6f676c656164732f76332f636f6d6d6f6e2f61645f747970655f696e666f732e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e1a43676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f63616c6c5f636f6e76657273696f6e5f7265706f7274696e675f73746174652e70726f746f1a3d676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f646973706c61795f61645f666f726d61745f73657474696e672e70726f746f1a3f676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f646973706c61795f75706c6f61645f70726f647563745f747970652e70726f746f1a43676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f6c65676163795f6170705f696e7374616c6c5f61645f6170705f73746f72652e70726f746f1a2d676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f6d696d655f747970652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22a4010a0a546578744164496e666f122e0a08686561646c696e6518012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0c6465736372697074696f6e3118022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0c6465736372697074696f6e3218032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522f7020a12457870616e646564546578744164496e666f12340a0e686561646c696e655f706172743118012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512340a0e686561646c696e655f706172743218022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512340a0e686561646c696e655f706172743318062001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512310a0b6465736372697074696f6e18032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0c6465736372697074696f6e3218072001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565122b0a05706174683118042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565122b0a05706174683218052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522e7050a0e43616c6c4f6e6c794164496e666f12320a0c636f756e7472795f636f646518012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0c70686f6e655f6e756d62657218022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512330a0d627573696e6573735f6e616d6518032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565122f0a09686561646c696e6531180b2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565122f0a09686561646c696e6532180c2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0c6465736372697074696f6e3118042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0c6465736372697074696f6e3218052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512300a0c63616c6c5f747261636b656418062001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c7565123b0a1764697361626c655f63616c6c5f636f6e76657273696f6e18072001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c756512430a1d70686f6e655f6e756d6265725f766572696669636174696f6e5f75726c18082001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512370a11636f6e76657273696f6e5f616374696f6e18092001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75651280010a1a636f6e76657273696f6e5f7265706f7274696e675f7374617465180a2001280e325c2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e43616c6c436f6e76657273696f6e5265706f7274696e675374617465456e756d2e43616c6c436f6e76657273696f6e5265706f7274696e6753746174652284010a1b457870616e64656444796e616d69635365617263684164496e666f12310a0b6465736372697074696f6e18012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0c6465736372697074696f6e3218022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565220d0a0b486f74656c4164496e666f22150a1353686f7070696e67536d6172744164496e666f22170a1553686f7070696e6750726f647563744164496e666f22510a1f53686f7070696e67436f6d70617269736f6e4c697374696e674164496e666f122e0a08686561646c696e6518012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522a9040a0b476d61696c4164496e666f123b0a0674656173657218012001280b322b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e476d61696c54656173657212320a0c6865616465725f696d61676518022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512350a0f6d61726b6574696e675f696d61676518032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565123e0a186d61726b6574696e675f696d6167655f686561646c696e6518042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512410a1b6d61726b6574696e675f696d6167655f6465736372697074696f6e18052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512630a266d61726b6574696e675f696d6167655f646973706c61795f63616c6c5f746f5f616374696f6e18062001280b32332e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e446973706c617943616c6c546f416374696f6e12440a0e70726f647563745f696d6167657318072003280b322c2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e50726f64756374496d61676512440a0e70726f647563745f766964656f7318082003280b322c2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e50726f64756374566964656f22d7010a0b476d61696c546561736572122e0a08686561646c696e6518012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512310a0b6465736372697074696f6e18022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512330a0d627573696e6573735f6e616d6518032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512300a0a6c6f676f5f696d61676518042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522ac010a13446973706c617943616c6c546f416374696f6e122a0a047465787418012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512300a0a746578745f636f6c6f7218022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512370a1175726c5f636f6c6c656374696f6e5f696418032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522cb010a0c50726f64756374496d61676512330a0d70726f647563745f696d61676518012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512310a0b6465736372697074696f6e18022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512530a16646973706c61795f63616c6c5f746f5f616374696f6e18032001280b32332e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e446973706c617943616c6c546f416374696f6e22430a0c50726f64756374566964656f12330a0d70726f647563745f766964656f18012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522f1040a0b496d6167654164496e666f12300a0b706978656c5f776964746818042001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512310a0c706978656c5f68656967687418052001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565122f0a09696d6167655f75726c18062001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512380a13707265766965775f706978656c5f776964746818072001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512390a14707265766965775f706978656c5f68656967687418082001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512370a11707265766965775f696d6167655f75726c18092001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512470a096d696d655f74797065180a2001280e32342e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e4d696d6554797065456e756d2e4d696d6554797065122a0a046e616d65180b2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0a6d656469615f66696c6518012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654800122b0a046461746118022001280b321b2e676f6f676c652e70726f746f6275662e427974657356616c75654800123f0a1861645f69645f746f5f636f70795f696d6167655f66726f6d18032001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565480042070a05696d61676522530a19566964656f42756d706572496e53747265616d4164496e666f12360a10636f6d70616e696f6e5f62616e6e657218012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522590a1f566964656f4e6f6e536b69707061626c65496e53747265616d4164496e666f12360a10636f6d70616e696f6e5f62616e6e657218012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522c7010a1b566964656f5472756556696577496e53747265616d4164496e666f12390a13616374696f6e5f627574746f6e5f6c6162656c18012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512350a0f616374696f6e5f686561646c696e6518022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512360a10636f6d70616e696f6e5f62616e6e657218032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522790a14566964656f4f757473747265616d4164496e666f122e0a08686561646c696e6518012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512310a0b6465736372697074696f6e18022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522b6010a1c566964656f5472756556696577446973636f766572794164496e666f122e0a08686561646c696e6518012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0c6465736372697074696f6e3118022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0c6465736372697074696f6e3218032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522e1030a0b566964656f4164496e666f12300a0a6d656469615f66696c6518012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512500a09696e5f73747265616d18022001280b323b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e566964656f5472756556696577496e53747265616d4164496e666f4800124b0a0662756d70657218032001280b32392e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e566964656f42756d706572496e53747265616d4164496e666f4800124a0a0a6f75745f73747265616d18042001280b32342e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e566964656f4f757473747265616d4164496e666f480012580a0d6e6f6e5f736b69707061626c6518052001280b323f2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e566964656f4e6f6e536b69707061626c65496e53747265616d4164496e666f480012510a09646973636f7665727918062001280b323c2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e566964656f5472756556696577446973636f766572794164496e666f480042080a06666f726d617422f5010a16526573706f6e736976655365617263684164496e666f123e0a09686561646c696e657318012003280b322b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e416454657874417373657412410a0c6465736372697074696f6e7318022003280b322b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4164546578744173736574122b0a05706174683118032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565122b0a05706174683218042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522fd060a1d4c6567616379526573706f6e73697665446973706c61794164496e666f12340a0e73686f72745f686561646c696e6518012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512330a0d6c6f6e675f686561646c696e6518022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512310a0b6465736372697074696f6e18032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512330a0d627573696e6573735f6e616d6518042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512380a14616c6c6f775f666c657869626c655f636f6c6f7218052001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c756512320a0c616363656e745f636f6c6f7218062001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512300a0a6d61696e5f636f6c6f7218072001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512390a1363616c6c5f746f5f616374696f6e5f7465787418082001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512300a0a6c6f676f5f696d61676518092001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512370a117371756172655f6c6f676f5f696d616765180a2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512350a0f6d61726b6574696e675f696d616765180b2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565123c0a167371756172655f6d61726b6574696e675f696d616765180c2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512680a0e666f726d61745f73657474696e67180d2001280e32502e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e446973706c61794164466f726d617453657474696e67456e756d2e446973706c61794164466f726d617453657474696e6712320a0c70726963655f707265666978180e2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512300a0a70726f6d6f5f74657874180f2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522ab030a094170704164496e666f12460a116d616e6461746f72795f61645f7465787418012001280b322b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4164546578744173736574123e0a09686561646c696e657318022003280b322b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e416454657874417373657412410a0c6465736372697074696f6e7318032003280b322b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4164546578744173736574123c0a06696d6167657318042003280b322c2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4164496d616765417373657412440a0e796f75747562655f766964656f7318052003280b322c2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4164566964656f4173736574124f0a1368746d6c355f6d656469615f62756e646c657318062003280b32322e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e41644d6564696142756e646c6541737365742294020a13417070456e676167656d656e744164496e666f123e0a09686561646c696e657318012003280b322b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e416454657874417373657412410a0c6465736372697074696f6e7318022003280b322b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4164546578744173736574123c0a06696d6167657318032003280b322c2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4164496d6167654173736574123c0a06766964656f7318042003280b322c2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4164566964656f417373657422cb020a164c6567616379417070496e7374616c6c4164496e666f122c0a066170705f696418012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565126b0a096170705f73746f726518022001280e32582e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e4c6567616379417070496e7374616c6c416441707053746f7265456e756d2e4c6567616379417070496e7374616c6c416441707053746f7265122e0a08686561646c696e6518032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0c6465736372697074696f6e3118042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0c6465736372697074696f6e3218052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522aa080a17526573706f6e73697665446973706c61794164496e666f12460a106d61726b6574696e675f696d6167657318012003280b322c2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4164496d6167654173736574124d0a177371756172655f6d61726b6574696e675f696d6167657318022003280b322c2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4164496d616765417373657412410a0b6c6f676f5f696d6167657318032003280b322c2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4164496d616765417373657412480a127371756172655f6c6f676f5f696d6167657318042003280b322c2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4164496d6167654173736574123e0a09686561646c696e657318052003280b322b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e416454657874417373657412420a0d6c6f6e675f686561646c696e6518062001280b322b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e416454657874417373657412410a0c6465736372697074696f6e7318072003280b322b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e416454657874417373657412440a0e796f75747562655f766964656f7318082003280b322c2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4164566964656f417373657412330a0d627573696e6573735f6e616d6518092001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512300a0a6d61696e5f636f6c6f72180a2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0c616363656e745f636f6c6f72180b2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512380a14616c6c6f775f666c657869626c655f636f6c6f72180c2001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c756512390a1363616c6c5f746f5f616374696f6e5f74657874180d2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0c70726963655f707265666978180e2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512300a0a70726f6d6f5f74657874180f2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512680a0e666f726d61745f73657474696e6718102001280e32502e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e446973706c61794164466f726d617453657474696e67456e756d2e446973706c61794164466f726d617453657474696e6722eb010a13446973706c617955706c6f61644164496e666f12790a1b646973706c61795f75706c6f61645f70726f647563745f7479706518012001280e32542e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e446973706c617955706c6f616450726f6475637454797065456e756d2e446973706c617955706c6f616450726f6475637454797065124a0a0c6d656469615f62756e646c6518022001280b32322e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e41644d6564696142756e646c6541737365744800420d0a0b6d656469615f617373657442eb010a22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e4210416454797065496e666f7350726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f636f6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e56332e436f6d6d6f6eca021e476f6f676c655c4164735c476f6f676c654164735c56335c436f6d6d6f6eea0222476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a436f6d6d6f6e620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

