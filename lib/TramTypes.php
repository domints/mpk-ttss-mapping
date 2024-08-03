<?php
class TramTypes extends VehicleTypes {
	public function __construct() {
		$data = <<<'END'
101	107	HW	E1	0
108	113	RW	E1	0
114	126	HW	E1	0
127	127	RW	E1	0
128	130	HW	E1	0
131	132	RW	E1	0
133	133	HW	E1	0
134	134	RW	E1	0
135	136	HW	E1	0
137	139	RW	E1	0
140	147	HW	E1	0
148	150	RW	E1	0
151	152	HW	E1	0
153	153	RW	E1	0
154	154	HW	E1	0
155	155	RW	E1	0
156	158	HW	E1	0
159	159	RW	E1	0
160	174	HW	E1	0
201	206	RZ	105N	0
207	208	HZ	105N	0
209	245	RZ	105N	0
246	299	HZ	105N	0
301	302	RF	GT8N	1
304	309	RF	GT8N	1
310	313	RF	GT8C	1
314	329	RF	GT8N	1
401	440	HL	EU8N	1
451	456	HK	N8C-NF	1
457	461	HK	N8S-NF	1
462	462	HK	N8C-NF	1
601	614	RP	NGT6 (1)	2
615	626	RP	NGT6 (2)	2
627	650	RP	NGT6 (3)	2
701	737	HY	Stadler Tango II	2
801	824	RY	NGT8	2
825	839	RY	Stadler Tango	2
840	874	HY	Stadler Tango	2
875	898	RY	Stadler Tango II	2
899	899	RY	126N	2
901	914	RG	2014N	2
915	936	HG	2014N	2
999	999	HG	405N	1
END;
		parent::__construct($data);
	}
	
	public function getByNumber($id) {
		return parent::getByNumber($id);
	}
}
/*
RT011
HW101
HW104
HW118
HW119
HW120
HW121
HW122
HW123
HW124
HW126
HW129
HW130
RW131
HW132
HW133
HW134
HW135
HW136
RW138
HW140
HW141
HW142
HW143
HW144
HW145
HW146
HW147
HW148
HW149
RW150
HW151
RW153
HW155
HW164
HW172
HW173
RZ206
RZ209
RZ213
RZ216
RZ217
RZ219
RZ226
RZ228
RZ229
RZ230
RZ231
RZ232
RZ233
RZ234
RZ235
RZ236
RZ237
RZ238
RZ239
RZ242
RZ243
RZ244
RZ245
RZ246
RZ247
RZ250
RZ251
HZ252
HZ253
RZ255
RZ256
RZ257
HZ258
HZ259
RZ260
RZ261
RZ262
HZ263
RZ264
RZ265
RZ267
RZ269
HZ270
RZ273
RZ275
RZ276
RZ278
RZ279
RZ280
HZ284
RZ289
RF301
RF302
RF303
RF304
RF305
RF306
RF307
RF308
RF309
RF310
RF311
RF312
RF313
RF314
RF315
RF316
RF317
RF318
RF319
RF320
RF321
RF322
RF323
RF324
RF325
RF326
RF327
RF328
RF329
HL401
HL402
HL403
HL404
HL405
HL406
HL407
HL408
HL409
HL410
HL411
HL412
HL413
HL414
HL415
HL416
HL417
HL418
HL419
HL420
HL421
HL422
HL423
HL424
HL425
HL426
HL427
HL428
HL429
HL430
HL431
HL432
HL433
HL434
HL435
HL436
HL437
HL438
HL439
HL440
HK451
HK452
HK453
HK454
HK455
HK456
HK457
HK458
HK459
HK460
HK461
HK462
HB504
HB520
HB521
HB522
HB523
HB526
HB530
RB531
HB533
HB536
RB538
HB539
HB540
HB541
HB542
HB543
HB544
HB545
HB546
HB547
HB548
HB549
RB550
HB551
RB553
HB554
HB555
HB564
RP601
RP602
RP603
RP604
RP605
RP606
RP607
RP608
RP609
RP610
RP611
RP612
RP613
RP614
RP615
RP616
RP617
RP618
RP619
RP620
RP621
RP622
RP623
RP624
RP625
RP626
RP627
RP628
RP629
RP630
RP631
RP632
RP633
RP634
RP635
RP636
RP637
RP638
RP639
RP640
RP641
RP642
RP643
RP644
RP645
RP646
RP647
RP648
RP649
RP650
HY701
HY702
HY703
HY704
HY705
HY706
HY707
HY708
HY709
HY710
HY711
HY712
HY713
HY714
HY715
HY716
HY717
HY718
HY719
HY720
HY721
HY722
HY723
HY724
HY725
HY726
HY727
HY728
HY729
HY730
HY731
HY732
HY733
HY734
HY735
HY736
HY737
HY738
HY739
HY740
HY741
HY742
HY743
HY744
HY745
RY801
RY802
RY803
RY804
RY805
RY806
RY807
RY808
RY809
RY810
RY811
RY812
RY813
RY814
RY815
RY816
RY817
RY818
RY819
RY820
RY821
RY822
RY823
RY824
RY825
RY826
RY827
RY828
RY829
RY830
RY831
RY832
RY833
RY834
RY835
RY836
RY837
RY838
RY839
HY840
HY841
HY842
HY843
HY844
HY845
HY846
HY847
HY848
HY849
HY850
HY851
HY852
HY853
HY854
HY855
HY856
HY857
HY858
HY859
HY860
HY861
HY862
HY863
HY864
HY865
HY866
HY867
HY868
HY869
HY870
HY871
HY872
HY873
HY874
RY875
RY876
RY877
RY878
RY879
RY880
RY881
RY882
RY883
RY884
RY885
RY886
RY887
RY888
RY889
RY899
RG901
RG902
RG903
RG904
RG905
RG906
RG907
RG908
RG909
RG910
RG911
RG912
RG913
RG914
HG915
HG916
HG917
HG918
HG919
HG920
HG921
HG922
HG923
HG924
HG925
HG926
HG927
HG928
HG929
HG930
HG931
HG932
HG933
HG934
HG935
HG936
HG999
*/