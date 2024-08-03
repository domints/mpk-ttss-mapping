<?php
class BusTypes extends VehicleTypes {
	public function __construct() {
		$data = <<<'END'
1	4	DN	Solaris Urbino 18 IV Electric
5	6	DN	Solaris Urbino 18 III Electric
7	81	DN	Solaris Urbino 18 IV Electric
82	83	BH	Solaris Urbino 18 III Hybrid
84	95	BH	Volvo 7900A Hybrid
100	101	PA	Karsan Jest
102	102	PA	Mercedes-Benz Sprinter City 75
103	105	PA	Mercedes-Benz 516
106	112	DA	Autosan M09LE
113	121	BA	Autosan M09LE
122	132	DA	Autosan M09LE
133	141	BA	Autosan M09LE
200	200	DO	Mercedes Conecto
201	201	DO	Mercedes Conecto II
206	210	PO	Mercedes O530 C2 Hybrid
211	218	DO	Mercedes O530
219	243	PO	Mercedes O530 C2 Hybrid
244	269	DO	Mercedes O530 C2
270	299	BO	Mercedes O530 C2
301	328	DU	Solaris Urbino 12 IV
329	333	BU	Solaris Urbino 12 IV
334	335	PU	Solaris Urbino 12 IV
336	336	BU	Solaris Urbino 12 IV
337	338	PU	Solaris Urbino 12 IV
339	340	BU	Solaris Urbino 12 IV
341	349	KU	Solaris Urbino 12 IV
400	403	BH	Solaris Urbino 12,9 III Hybrid
404	408	DH	Solaris Urbino 12,9 III Hybrid
409	409	BH	Volvo 7900 Hybrid
490	499	KM	MAN Lion's Intercity 13
501	510	BR	Solaris Urbino 18 IV
511	556	DR	Solaris Urbino 18 IV
557	579	BR	Solaris Urbino 18 IV
580	595	DR	Solaris Urbino 18 IV
596	598	KR	Solaris Urbino 18 IV
601	601	DE	Solaris Urbino 12 III Electric
602	605	DE	Solaris Urbino 8,9LE Electric
606	606	DE	Solaris Urbino 12 III Electric
607	637	DE	Solaris Urbino 12 IV Electric
700	700	DC	Mercedes Conecto G
701	731	DC	Mercedes O530G
732	734	DC	Mercedes Conecto G
737	741	BR	Solaris Urbino 18 III
742	745	DR	Solaris Urbino 18 III
746	768	PR	Solaris Urbino 18 III
769	776	PR	Solaris Urbino 18 MetroStyle
777	777	PR	Solaris Urbino 18 III
778	797	PR	Solaris Urbino 18 IV
851	926	BU	Solaris Urbino 12 III
927	976	PU	Solaris Urbino 12 III
977	977	BU	Solaris Urbino 12 III
978	991	PU	Solaris Urbino 12 IV
992	997	BU	Solaris Urbino 12 IV
END;
		parent::__construct($data, 2);
	}
}
/*
DN001
DN002
DN003
DN004
DN005
DN006
DN007
DN008
DN009
DN010
DN011
DN012
DN013
DN014
DN015
DN016
DN017
DN018
DN019
DN020
DN021
DN022
DN023
DN024
DN025
DN026
DN027
DN028
DN029
DN030
DN031
DN032
DN033
DN034
DN035
DN036
DN037
DN038
DN039
DN040
DN041
DN042
DN043
DN044
DN045
DN046
DN047
DN048
DN049
DN050
DN051
DN052
DN053
DN054
DN055
DN056
DN057
DN058
DN059
DN060
DN061
DN062
DN063
DN064
DN065
DN066
DN067
DN068
DN069
DN070
DN071
DN072
DN073
DN074
DN075
DN076
DN077
DN078
DN079
DN080
DN081
PA100
PA101
PA102
PA103
PA104
PA105
DA106
DA107
DA108
DA109
DA110
DA111
DA112
BA113
BA114
BA115
BA116
BA117
BA118
BA119
BA120
BA121
DA122
DA123
DA124
DA125
DA126
DA127
DA128
DA129
DA130
DA131
DA132
BA133
BA134
BA135
BA136
BA137
BA138
BA139
BA140
BA141
BA142
BA143
BA144
BA145
PA146
PA147
PA148
PA149
DO200
DO201
PO206
PO207
PO208
PO209
PO210
DO211
DO212
DO213
DO214
DO215
DO216
DO217
DO218
PO219
PO220
PO221
PO222
PO223
PO224
PO225
PO226
PO227
PO228
PO229
PO230
PO231
PO232
PO233
PO234
PO235
PO236
PO237
PO238
PO239
PO240
PO241
PO242
PO243
DO244
DO245
DO246
DO247
DO248
DO249
DO250
DO251
DO252
DO253
DO254
DO255
DO256
DO257
DO258
DO259
BO260
BO261
BO262
BO263
BO264
BO265
BO266
BO267
BO268
BO269
BO270
BO271
BO272
BO273
BO274
BO275
BO276
BO277
BO278
BO279
BO280
BO281
BO282
BO283
BO284
BO285
BO286
BO287
BO288
BO289
BO290
BO291
BO292
BO293
BO294
BO295
BO296
BO297
BO298
BO299
DU301
DU302
DU303
DU304
DU305
DU306
DU307
DU308
DU309
DU310
DU311
DU312
DU313
DU314
DU315
DU316
BU317
DU317
BU318
DU318
BU319
BU320
BU321
BU322
BU323
BU324
BU325
BU326
BU327
BU328
BU329
BU330
BU331
BU332
PU332
PU333
PU334
PU335
BU336
PU337
PU338
BU339
BU340
DH400
DH401
BH402
DH402
DH403
DH404
DH405
DH406
DH407
DH408
BH409
BH410
BH411
BH412
BH413
BH414
BH415
BH416
BH417
BH418
BH419
BH420
BH421
BH422
BH423
BH424
BH425
BH426
BH427
BH428
BH429
BH430
BH431
BH432
BH433
BR501
BR502
BR503
BR504
BR505
BR506
BR507
BR508
BR509
BR510
DR511
DR512
DR513
DR514
DR515
DR516
DR517
DR518
DR519
DR520
DR521
DR522
DR523
DR524
DR525
DR526
DR527
DR528
DR529
DR530
DR531
DR532
DR533
DR534
DR535
DR536
DR537
DR538
DR539
DR540
DR541
DR542
DR543
DR544
DR545
DR546
DR547
DR548
DR549
DR550
DR551
DR552
DR553
DR554
DR555
DR556
BR557
BR558
BR559
BR560
BR561
BR562
BR563
BR564
BR565
BR566
BR567
BR568
BR569
BR570
BR571
BR572
BR573
BR574
BR575
BR576
BR577
BR578
BR579
DR580
DR581
DR582
DR583
DR584
DR585
DR586
DR587
DR588
DR589
DR590
DR591
DR592
DR593
DR594
DR595
DE601
DE602
DE603
DE604
DE605
DE606
DE607
DE608
DE609
DE610
DE611
DE612
DE613
DE614
DE615
DE616
DE617
DE618
DE619
DE620
DE621
DE622
DE623
DE624
DE625
DE626
DE627
DE628
DE629
DE630
DE631
DE632
DE633
DE634
DE635
DE636
DE637
DE638
DE639
DE640
PU698
PE699
DC700
DC701
DC702
DC703
DC704
DC705
DC706
DC707
DC708
DC709
DC710
DC712
DC713
DC714
DC715
DC716
DC717
DC718
DC719
DC720
DC721
DC722
DC723
DC724
DC725
DC726
DC727
DC728
DC729
DC730
DC731
DC732
DC733
DC734
BR737
BR738
BR741
DR742
DR743
DR744
DR745
PR746
PR747
PR748
PR749
PR750
PR751
PR752
PR753
PR754
PR755
PR756
PR757
PR758
PR759
PR760
PR761
PR762
PR763
PR764
PR765
PR766
PR767
PR768
PR769
PR770
PR771
PR772
PR773
PR774
PR775
PR776
PR777
PR778
PR779
PR780
PR781
PR782
PR783
PR784
PR785
PR786
PR787
PR788
PR789
PR790
PR791
PR792
PR793
PR794
PR795
PR796
PR797
BU856
BU857
BU858
BU859
BU860
BU861
BU862
BU863
BU864
BU866
BU867
BU868
BU869
BU870
BU871
BU873
BU874
BU875
BU876
BU877
BU878
BU879
BU880
BU881
BU882
BU883
BU884
BU891
BU892
BU893
BU894
BU895
BU896
BU897
BU898
BU899
BU900
BU901
BU902
BU903
BU904
BU905
BU906
BU907
BU908
BU909
BU910
BU911
BU912
BU913
BU914
BU915
BU916
BU917
BU918
BU919
BU920
BU921
BU922
BU923
BU924
BU925
BU926
PU927
PU928
PU929
PU930
PU931
PU932
PU933
PU934
PU935
PU936
PU937
PU938
PU939
PU940
PU941
PU942
PU943
PU944
PU945
PU946
PU947
PU948
PU949
PU950
PU951
PU952
PU953
PU954
BU955
PU955
PU956
PU957
PU958
PU959
PU960
PU961
PU962
PU963
PU964
PU965
PU966
PU967
PU968
PU969
PU970
PU971
PU972
PU973
PU974
PU975
PU976
BU977
PU978
PU979
PU980
PU981
PU982
PU983
PU984
PU985
PU986
PU987
PU988
PU989
PU990
PU991
BU992
BU993
BU994
BU995
BU996
BU997
*/
