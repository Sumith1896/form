/** @file fsizes.h
 *
 *  The definition the default values for certain buffer sizes etc.
 */

/* #[ License : */
/*
 *   Copyright (C) 1984-2013 J.A.M. Vermaseren
 *   When using this file you are requested to refer to the publication
 *   J.A.M.Vermaseren "New features of FORM" math-ph/0010025
 *   This is considered a matter of courtesy as the development was paid
 *   for by FOM the Dutch physics granting agency and we would like to
 *   be able to track its scientific use to convince FOM of its value
 *   for the community.
 *
 *   This file is part of FORM.
 *
 *   FORM is free software: you can redistribute it and/or modify it under the
 *   terms of the GNU General Public License as published by the Free Software
 *   Foundation, either version 3 of the License, or (at your option) any later
 *   version.
 *
 *   FORM is distributed in the hope that it will be useful, but WITHOUT ANY
 *   WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 *   FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 *   details.
 *
 *   You should have received a copy of the GNU General Public License along
 *   with FORM.  If not, see <http://www.gnu.org/licenses/>.
 */
/* #] License : */ 

/*
	First the fixed variables
*/
#define MAXPRENAMESIZE 128
/*
	The following variables are default sizes. They can be changed
	into values read from the setup file

    Remark (21-dec-2008 JV): WILDOFFSET*3 should be larger than WILDMASK!!!!
		old value was WILDOFFSET 200000100
		be careful with old .sav files!!!
*/
#ifdef WORDSIZE32
#define MAXPOWER 500000000
#define MAXVARIABLES 200000050
#define MAXDOLLARVARIABLES 1000000000L
#define WILDOFFSET 400000100
#define MAXINNAMETREE 2000000000
#define MAXDUMMIES 100000000
#define WORKBUFFER 40000000
#define MAXTER 40000
#define HALFMAX 0x10000
#else
#define MAXPOWER 10000
#define MAXVARIABLES 8050
#define MAXDOLLARVARIABLES 32000
#define WILDOFFSET 6100
#define MAXINNAMETREE 32768
#define MAXDUMMIES 1000
#define WORKBUFFER 10000000
#define MAXTER 10000
#define HALFMAX 0x100
#endif
#define MAXENAME 16
#define MAXSAVEFUNCTION 16384

#define MAXPARLEVEL 100
#define MAXNUMBERSIZE 200

#define MAXREPEAT 100
#define NORMSIZE 1000

#define INITNODESIZE 10
#define INITNAMESIZE 100

#define NUMFIXED 128
#define MAXNEST 100
#define MAXMATCH 30
#define MAXIF 20
#define SIZEFACS 640L
#define NUMFACS 50
#define MAXLOOPS 30
#define MAXLABELS 20
#define COMMERCIALSIZE 24
#define MAXFLAGS 16
/*
	The next quantities should still be eliminated from the program
	This should be together with changes in setfile!
*/
#define COMPRESSBUFFER 90000
#define FORTRANCONTINUATIONLINES 15
#define MAXLEVELS 2000
#define MAXLHS 400
#define MAXWILDC 100
#define NUMTABLEENTRIES 1000
#define COMPILERBUFFER 20000

#define SMALLBUFFER   10000000L
#define SMALLOVERFLOW 20000000L
#define TERMSSMALL      100000L
#define LARGEBUFFER   50000000L
#define MAXPATCHES 256
#define MAXFPATCHES 256
#define SORTIOSIZE 100000L

#define SSMALLBUFFER 500000L
#define SSMALLOVERFLOW 800000L
#define STERMSSMALL 10000L
#define SLARGEBUFFER 4000000L
#define SMAXPATCHES 64
#define SMAXFPATCHES 64
#define SSORTIOSIZE 32768L

#define SCRATCHSIZE 50000000L

#define MAXFLEVELS 30

#define COMPINC 2
 
#define MAXNUMSIZE 10

#define MAXBRACKETBUFFERSIZE 200000

#define SFHSIZE 40

#define DEFAULTPROCESSBUCKETSIZE 1000
#define SHMWINSIZE     65536L

#define TABLEEXTENSION 6

#define GZIPDEFAULT 6
#define BZIPDEFAULT 4   /* sam:Added */
#define DEFAULTTHREADS 0
#define DEFAULTTHREADBUCKETSIZE 500
#define DEFAULTTHREADLOADBALANCING 1
#define THREADSCRATCHSIZE 100000L
#define THREADSCRATCHOUTSIZE 2500000L

#ifdef WORDSIZE32
#define MAXTABLECOMBUF 100000000000L
#define MAXCOMBUFRHS 1000000000L
#else
#define MAXTABLECOMBUF 1000000L
#define MAXCOMBUFRHS 32500L
#endif

#define NUMSTORECACHES 4
#define SIZESTORECACHE 32768

#define INDENTSPACE 3

#define MULTIINDENTSPACE 1
#define MAXMULTIBRACKETLEVELS 25

#define FBUFFERSIZE 1026
/*
	For the random number generator (see commentary there)
*/
#define NPAIR1 38
#define NPAIR2 89

#define MAXLINELENGTH 256
